<?php

class SectionSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('page_sections')->delete();

        $sections = array(
            array('welcome', 'التميز هو عنوان خدمتنا لك', ''),
            array('about_us', 'مؤسسة ركن لودي للخدمات التجارية', 'مؤسسة رائدة بمجال الخدمات التجارية ... حققت نجاحا باهرا وسمعة طيبة بين شركات الشحن البري السريع وانطلاقا من اهدافنا وثقة عملائنا ... فقنا بتوسيع أنشطتنا التجارية لتشمل قطاع خدمات رجال الاعمال والاستيراد والتصدير أملين من الله ان يوفقنا فى تحقيق ثقة عملائنا دائما'),
            array('services', 'خدمات رجال الاعمال', 'كافة الخدمات لرجال الأعمال كالطباعة وتصوير المستندات ، والترجمة ، الفاكس ، والبريد الإلكتروني واعداد شبكات الحاسوب وعقود الصيانة'),
            array('why_to_choose', 'لماذا تختار ركن لودي ؟', 'لأننا نسعي دائما لكسب ثقة عملائنا سواء من ناحية سرعة تقديم الخدمة المطلوبة للعميل أو من ناحية تقديم التميز والاتقان فى تلبية اجتياجات عملائنا والمساعدة المطلوبة في أي وقت'),
            array('information_slides', '', ''),
            array('block_quote', 'معنا تعرف معني التميز والسرعة والاتقان', ''),
            array('shipping', 'الشحن البري', 'الشحن البرى هو نوع من أنواع الشحن المتعارف عليه في دول العالم والتي من خلالها يتم نقل الأغراض من مكان إلى مكان وتقوم بعملية النقل الشاحنات'),
            array('ready_cloth', 'الملابس الجاهزة', 'أحدث الملابس الجاهزة والموديلات المصرية والعالمية وملابس المحجبات وفساتين أفراح وخطوبة وملابس للخروج وإكسسوارات وغيرها‏'),
            array('food_members', 'المواد الغذائية', 'نحن احدى الشركات الرائدة في مجال إستيراد المواد الغذائية والفواكه، وبرغم حداثة الشركة إلا إننا استطعنا أن تتعاقد مع عدد من الشركات المتخصصة في إنتاج وتعليب المواد '),
            array('main_offers', '  العروض رئيسيى للمنتجات الغذائية الاكثر مبيعا ', ' العروض رئيسيى للمنتجات الغذائية الاكثر مبيعا  العروض رئيسيى للمنتجات الغذائية الاكثر مبيعا  العروض رئيسيى للمنتجات الغذائية الاكثر مبيعا  '),
            array('roknlodi_video', '', ''),
            array('google_maps', 'أين نحن؟ انقر فوق لخريطة جوجل ', ''),
            array('contact', 'ابق على اتصال معنا', 'يسرنا دائما استقبال رسائلكم ومقترحاتكم على صفحات التواصل الاجتماعي   '),
            array('site_social', '', ''),
        );

        $i = 1;

        foreach($sections as $section)
        {
            \Website\PageSection::create(array(
                'name' => $section[0],
                'title' => $section[1],
                'description' => $section[2],
                'order' => $i++
            ));
        }
    }

} 