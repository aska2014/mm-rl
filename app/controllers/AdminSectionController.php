<?php
class AdminSectionController extends BaseController {

    /**
     * @param Website\PageSection $sections
     */
    public function __construct(\Website\PageSection $sections)
    {
        $this->sections = $sections;
    }

    /**
     * Display all sections information
     */
    public function getIndex()
    {
        $sections = $this->sections->orderBy('order', 'ASC')->get();

        return View::make('admin.sections.all', compact('sections'));
    }

    /**
     * Display one shipping information
     */
    public function getOne($id)
    {
        $section = $this->sections->findOrFail($id);

        return View::make('admin.sections.one', compact('section'));
    }

    /**
     * Create new shipping
     */
    public function getCreate()
    {
        $section = new EmptyClass();

        return View::make('admin.sections.add', compact('section'));
    }

    /**
     * Edit existing shipping
     */
    public function getEdit($id)
    {
        $section = $this->sections->findOrFail($id);

        return View::make('admin.sections.add', compact('section'));
    }

    /**
     * Post create new shipping
     */
    public function postCreate()
    {
    }

    /**
     * Post edit new section
     */
    public function postEdit($id)
    {
        $section = $this->sections->findOrFail($id);

        $section->update(Input::get('section'));

        return Redirect::to('/admin/section/edit/'.$section->id)->with('success', 'Section created successfully');
    }

} 