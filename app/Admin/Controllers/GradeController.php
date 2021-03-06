<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Grade;
use App\Models\School;
use Dcat\Admin\Admin;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;

class GradeController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->header('成绩列表')
            ->body($this->grid());
    }
    /**
     * 表格构建
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Grade(['school']), function (Grid $grid) {
            $grid->disableCreateButton();
            $grid->disableRowSelector();
            // 字段显示处理
            $grid->id->sortable();
            $grid->column('school.name', '学校');
            $grid->xh;
            $grid->xn;
            $grid->xq;
            $grid->kh;
            $grid->km;
            $grid->kx;
            $grid->cj;
            $grid->xf;
            $grid->jd;
            $grid->created_at;
            $grid->updated_at->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->equal('xh')->width(2);
            });

            // 查询事件
            $grid->fetching(function (Grid $grid) {
                // 如果管理员用户是普通用户，只看获取自己创建的学校的学生成绩
                if (Admin::user()->isRole('general')) {
                    $school = School::where('admin_id', Admin::user()->id)->pluck('id');
                    $grid->model()->whereIn('school_id', $school);
                }
            });
        });
    }

    /**
     * 显示构建
     *
     * @param  mixed  $id
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Grade(['school']), function (Show $show) {
            // 字段显示处理
            $show->id;
            $show->field('school.name', '学校');
            $show->xh;
            $show->xn;
            $show->xq;
            $show->kh;
            $show->km;
            $show->kx;
            $show->cj;
            $show->xf;
            $show->jd;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * 表单构建
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Grade(['school']), function (Form $form) {
            // 字段显示处理
            $form->display('id');
            $form->display('school.name', '学校');
            $form->text('xh');
            $form->text('xn');
            $form->text('xq');
            $form->text('kh');
            $form->text('km');
            $form->text('kx');
            $form->text('cj');
            $form->text('xf');
            $form->text('jd');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
