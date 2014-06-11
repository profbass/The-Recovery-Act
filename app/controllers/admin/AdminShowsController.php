<?php

class AdminShowsController extends AdminController {


    /**
     * Post Model
     * @var Post
     */
    protected $show;

    /**
     * Inject the models.
     * @param Post $show
     */
    public function __construct(Post $show)
    {
        parent::__construct();
        $this->show = $show;
    }

    /**
     * Show a list of all the shows shows.
     *
     * @return View
     */
    public function getIndex()
    {
        // Title
        $title = Lang::get('admin/shows/venue.shows_management');

        // Grab all the shows shows
        $shows = $this->show;

        // Show the page
        return View::make('admin/shows/index', compact('shows', 'title'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        // Title
        $title = Lang::get('admin/shows/venue.create_a_new_shows');

        // Show the page
        return View::make('admin/shows/create_edit', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function showCreate()
	{
        // Declare the rules for the form validation
        $rules = array(
            'venue'   => 'required|min:3',
            'content' => 'required|min:3'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Create a new shows show
            $user = Auth::user();

            // Update the shows show data
            $this->show->venue             = Input::get('venue');
            $this->show->date             = Input::get('date');
            $this->show->address          = Input::get('address');
            $this->show->content          = Input::get('content');
            $this->show->web_link         = Input::get('web-link');
            $this->show->facebook_link    = Input::get('facebook-link');

            // Was the shows show created?
            if($this->show->save())
            {
                // Redirect to the new shows show page
                return Redirect::to('admin/shows/' . $this->show->id . '/edit')->with('success', Lang::get('admin/shows/messages.create.success'));
            }

            // Redirect to the shows show create page
            return Redirect::to('admin/shows/create')->with('error', Lang::get('admin/shows/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/shows/create')->withInput()->withErrors($validator);
	}

    /**
     * Display the specified resource.
     *
     * @param $show
     * @return Response
     */
	public function getShow($show)
	{
        // redirect to the frontend
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $show
     * @return Response
     */
	public function getEdit($show)
	{
        // Title
        $title = Lang::get('admin/shows/venu.show_update');

        // Show the page
        return View::make('admin/shows/create_edit', compact('show', 'title'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $show
     * @return Response
     */
	public function showEdit($show)
	{

        // Declare the rules for the form validation
        $rules = array(
            'venue'    => 'required|min:3',
            'content' => 'required|min:3'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the shows show data
            $show->venue            = Input::get('venue');
            $show->date             = Input::get('date');
            $show->address          = Input::get('address');
            $show->content          = Input::get('content');
            $show->web_link         = Input::get('web-link');
            $show->facebook_link    = Input::get('facebook-link');

            // Was the shows show updated?
            if($show->save())
            {
                // Redirect to the new shows show page
                return Redirect::to('admin/shows/' . $show->id . '/edit')->with('success', Lang::get('admin/shows/messages.update.success'));
            }

            // Redirect to the shows show management page
            return Redirect::to('admin/shows/' . $show->id . '/edit')->with('error', Lang::get('admin/shows/messages.update.error'));
        }

        // Form validation failed
        return Redirect::to('admin/shows/' . $show->id . '/edit')->withInput()->withErrors($validator);
	}


    /**
     * Remove the specified resource from storage.
     *
     * @param $show
     * @return Response
     */
    public function getDelete($show)
    {
        // Title
        $title = Lang::get('admin/shows/venue.show_delete');

        // Show the page
        return View::make('admin/shows/delete', compact('show', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $show
     * @return Response
     */
    public function showDelete($show)
    {
        // Declare the rules for the form validation
        $rules = array(
            'id' => 'required|integer'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $id = $show->id;
            $show->delete();

            // Was the shows show deleted?
            $show = Post::find($id);
            if(empty($show))
            {
                // Redirect to the shows shows management page
                return Redirect::to('admin/shows')->with('success', Lang::get('admin/shows/messages.delete.success'));
            }
        }
        // There was a problem deleting the shows show
        return Redirect::to('admin/shows')->with('error', Lang::get('admin/shows/messages.delete.error'));
    }

    /**
     * Show a list of all the shows shows formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $shows = Post::select(array('shows.id', 'shows.venue', 'shows.id as comments', 'shows.created_at'))->orderBy('created_at', 'DESC');
        //the orderby breaks the ajax sorting on the page, FYI.

        return Datatables::of($shows)

        // ->edit_column('comments', '{{ DB::table(\'comments\')->where(\'show_id\', \'=\', $id)->count() }}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/shows/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
                <a href="{{{ URL::to(\'admin/shows/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }

}