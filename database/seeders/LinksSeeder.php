<?php

namespace Database\Seeders;

use App\Models\Linke;
use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{
       /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   //Manegar
   $link = Linke::create(['title'=>'المنطقة الإدارية','icon'=>'icon-home','route'=>'#']);
    Linke::create(['title'=>'إضافة جنسية ','icon'=>'icon-list','route'=>'national.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'تسجيل زيارة','icon'=>'icon-plus','route'=>'visitor.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'إنهاء زيارة','icon'=>'icon-list','route'=>'endvisit.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'تقرير الزيارات','icon'=>'fa fa-list','route'=>'report.index','parent_id'=>$link->id]);
   $users = Linke::create(['title'=>'المستخدمين والصلاحيات','icon'=>'fa fa-list','route'=>'report.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'إضافة مستخدمين ','icon'=>'icon-list','route'=>'national.index','parent_id'=>$users->id]);
    Linke::create(['title'=>'إضافة مجموعات','icon'=>'icon-plus','route'=>'visitor.index','parent_id'=>$users->id]);
    Linke::create(['title'=>'ربط العيادة بالطبيب','icon'=>'fa fa-list','route'=>'report.index','parent_id'=>$users->id]);
   $settings = Linke::create(['title'=>'قائمة الإعدادت','icon'=>'fa fa-list','route'=>'report.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'إعداد البريد الإلكتروني ','icon'=>'icon-list','route'=>'email.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'الخيارات','icon'=>'icon-plus','route'=>'options.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'إضافة تطعيمات','icon'=>'fa fa-list','route'=>'vaccinations.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'إعدادت الإيصال','icon'=>'icon-list','route'=>'communicate.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'إضافة عملة','icon'=>'icon-plus','route'=>'currncy.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'كود التشخيص','icon'=>'fa fa-list','route'=>'code.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'القاموس','icon'=>'icon-plus','route'=>'dictionary.index','parent_id'=>$settings->id]);
    Linke::create(['title'=>'نسخة إحتياطية','icon'=>'fa fa-list','route'=>'backup.index','parent_id'=>$settings->id]);
   $adds = Linke::create(['title'=>'البيانات الإساسية','icon'=>'fa fa-list','route'=>'report.index','parent_id'=>$link->id]);
    Linke::create(['title'=>'إضافة فئات وخدمات','icon'=>'icon-list','route'=>'addservice.index','parent_id'=>$adds->id]);
    Linke::create(['title'=>'إضافة عياد','icon'=>'icon-plus','route'=>'addclinic.index','parent_id'=>$adds->id]);
    Linke::create(['title'=>'إضافة دكتور','icon'=>'fa fa-list','route'=>'addDoctor.index','parent_id'=>$adds->id]);
    Linke::create(['title'=>'بيانات عامة ','icon'=>'icon-list','route'=>'data.index','parent_id'=>$link->id]);




     ///employees
     $link = Linke::create(['title'=>'شئون الموظفين   ','icon'=>'fa fa-cog','route'=>'#']);
     Linke::create(['title'=>'لوائح المخالفات ','icon'=>'icon-list','route'=>'national.index','parent_id'=>$link->id]);
     Linke::create(['title'=>'إضافة مخالفة الي موظف','icon'=>'icon-plus','route'=>'national.index','parent_id'=>$link->id]);
     Linke::create(['title'=>'تقرير سلف الموظفين','icon'=>'icon-list','route'=>'national.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'لفت نظر','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'حركات الموظف','icon'=>'fa fa-info','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'إضافة بدلات ','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'ضرائب الموظفين','icon'=>'icon-plus','route'=>'bookings.create','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'إعتماد رواتب مفصل','icon'=>'fa fa-trash','route'=>'bookings','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'سداد التأمينات الشهرية للموظفين','icon'=>'fa fa-edit','route'=>'bookings.edit','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'مرفقات موظف','icon'=>'fa fa-lock','route'=>'bookings.index','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'غياب الموظفين ','icon'=>'icon-list','route'=>'sliders.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'طلب إخلاء طرف','icon'=>'icon-plus','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'تعديل سلف الموظفين','icon'=>'icon-list','route'=>'menus.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'لفت نظر','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    
    //  Linke::create(['title'=>'حركات الموظف','icon'=>'fa fa-info','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'إضافة بدلات ','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'ضرائب الموظفين','icon'=>'icon-plus','route'=>'bookings.create','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'إعتماد رواتب مفصل','icon'=>'fa fa-trash','route'=>'bookings.index','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'سداد التأمينات الشهرية للموظفين','icon'=>'fa fa-edit','route'=>'bookings.edit','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'مرفقات موظف','icon'=>'fa fa-lock','route'=>'permissions','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'غياب الموظفين','icon'=>'fa fa-info','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'طلب إخلاء طرف ','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'تعديل سلف الموظفين','icon'=>'icon-plus','route'=>'bookings.create','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'إعدادت الموظفين','icon'=>'fa fa-trash','route'=>'bookings.destroy','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'الموظفين','icon'=>'fa fa-edit','route'=>'bookings.edit','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'حضور الموظف','icon'=>'fa fa-lock','route'=>'permissions','parent_id'=>$link->id,'show_in_menu'=>0]);
    //  Linke::create(['title'=>'الإذونات','icon'=>'icon-list','route'=>'sliders.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'الإجازات','icon'=>'icon-plus','route'=>'sliders.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'الراواتب','icon'=>'icon-list','route'=>'menus.index','parent_id'=>$link->id]);
    //  Linke::create(['title'=>'شرائح ضريبة الدخل ','icon'=>'icon-list','route'=>'bookings.index','parent_id'=>$link->id]);
    

       
        // //Pationts        
        // $link = Linke::create(['title'=>'المرضي','icon'=>'icon-list','route'=>'#']);
        // Linke::create(['title'=>'إقفال اليومية','icon'=>'icon-list','route'=>'rooms.index','parent_id'=>$link->id]);
        // Linke::create(['title'=>'Create New Room','icon'=>'icon-plus','route'=>'rooms.create','parent_id'=>$link->id]);
       
        // //Campanys        
        // $link = Linke::create(['title'=>'الشركات','icon'=>'fa fa-calendar','route'=>'#']);
        // Linke::create(['title'=>'Manage Offers','icon'=>'icon-list','route'=>'offers.index','parent_id'=>$link->id]);
        // Linke::create(['title'=>'Create New Offer','icon'=>'icon-plus','route'=>'offers.create','parent_id'=>$link->id]);
    
       

    }
}
