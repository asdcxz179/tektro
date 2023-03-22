<?php

return [
  'menu' => [
    'users' => '管理員',
    'users_setting' => '管理員設定',
    'roles' => '角色',
    'suppliers' => '供應商管理',

    'homes' => '首頁',
    'header_banners' => '選單小圖',

    'info' => '資訊',
    'news' => '最新消息',
    'talents' => '人才招募',

    'abouts' => '關於我們',

    'product_label' => '產品品牌',
    'product_brands' => '品牌',
    'product_categories' => '產品類別',
    'product_tags' => '自行車類別',
    'product_special' => '特殊類別',
    'product_keywords' => '關鍵字',
    'product_icons' => '技術icon',
    'products' => '產品',    

    'assist' => '支援',
    'support_categories' => '技術分類',
    'supports' => '技術手冊',
    'video_settings' => '影音分享',
    'commons' => '常見問題',

    'connect' => '聯絡我們',
    'contacts' => '聯絡我們表單',
    'contact_settings' => '聯絡我們設定', 
    'dealers' => '經銷商', 
    'subscription' => '電子報', 

    'communities' => '社群管理', 

    'test' => '測試',
    'template' => '模板',
  ],
  'audits' => [
    'user' => '管理員',
    'event' => '動作',
    'auditing' => '操作紀錄',
    'created' => '「:name」 => [:new]',
    'updated' => '「:name」 => [:new]',
    'deleted' => '「:name」 => [:old]',
  ],
  'users' => [
    'name' => '名稱',
    'email' => '信箱',
    'roles' => '角色',
    'password' => '密碼',
    'password_error' => '密碼錯誤',
    'password_confirmation' => '密碼確認',
    'status' => '狀態',
  ],
  'roles' => [
    'name' => '角色名稱',
    'permissions' => '角色權限'
  ],
  'users' => [
    'name' => '名稱',
    'email' => '信箱',
    'roles' => '角色',
    'password' => '密碼',
    'password_error' => '密碼錯誤',
    'password_confirmation' => '密碼確認',
    'status' => '狀態',
  ],  
  'homes' => [
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'home_type_id' => '模組',

    'show_date' => '顯示日期',
    'banner' => '圖片',

    'sort' => '排序',
    'status' => '狀態',

    'relation' => [
      '*' => [
        'brand' => '品牌',
        'title' => '標題',
        'big_title' => '大標題',
        'small_title' => '小標題',
        'title' => '標題',

        'youtube_key' => 'youtube_key',
        'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
        'path' => '圖片',
        'link' => '連結',
    
        'sort' => '排序',  
      ]
    ]  
  ],  
  'header_banners' => [
    'name' => '名稱',
    'path' => '圖片',
  ],  
  'news' => [
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],

    'show_date' => '顯示日期',
    'banner' => '封面圖',
    'up_image' => '上方主圖',

    'sort' => '排序',
    'status' => '狀態',
  ],
  'talents' => [
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],

    'show_date' => '顯示日期',
    'banner' => '封面圖',
    'up_image' => '上方主圖',

    'sort' => '排序',
    'status' => '狀態',
  ],  
  'abouts' => [
    'name' => ['*' => '名稱'],
    'content' => ['*' => '內容'],

    'banner' => '選單小圖',

    'sort' => '排序',
    'status' => '狀態',
  ],        
  'product_brands' => [
    'name' => ['*' => '名稱'],
    'advertise_title' => ['*' => '廣告標題'],
    'advertise_subtitle' => ['*' => '廣告副標題'],
    'below_advertise_title' => ['*' => '下方廣告標題'],
    'below_advertise_subtitle' => ['*' => '下方廣告副標題'],

    'banner' => '橫幅',
    'advertise_image' => '廣告圖片',
    'advertise_link' => '廣告連結',
    'below_advertise_image' => '下方廣告圖片',
    'below_advertise_switch' => '下方廣告按鈕顏色',
    'below_advertise_switch_data' => [ '黑', '白' ],
    'below_advertise_link' => '下方廣告連結',
    'file' => '型錄下載',

    'sort' => '排序',
    'status' => '狀態',
  ],
  'product_categories' => [
    'name' => [
      'zh-Hant' => '中文語系 名稱',
      'en' => '英文語系 名稱',
      '*' => '名稱',
    ],

    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)'
  ],
  'product_tags' => [
    'name' => ['*' => '名稱'],
    
    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態', 
      
    'product_brands' => '品牌(可多選)',
  ],
  'product_special' => [
    'name' => ['*' => '名稱'],
    
    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態', 
      
    'product_brands' => '品牌(可多選)',
  ],
  'product_icons' => [
    'name' => [
      'zh-Hant' => '中文語系 名稱',
      'en' => '英文語系 名稱',
      '*' => '名稱',
    ],

    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)'
  ],  
  'products' => [
    'keyword' => ['*' => '關鍵字'],
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],
    'details' => ['*' => 'DETAILS'],
    'technology' => ['*' => 'TECHNOLOGY'],
    'test_reviews' => ['*' => 'TEST & REVIEWS'],
    'related_products' => ['*' => 'RELATED PRODUCTS'],
    'attribute' => ['*' => '功能屬性'],

    'banner' => '產品列表小圖',

    'sort' => '排序',
    'status' => '狀態',   
    'new' => '最新產品',

    'product_categories' => '產品類別(可多選)',
    'product_icons' => '技術icon(可多選)',
    'product_tags' => '自行車類別(可多選)',
    'product_special' => '特殊類別(可多選)',

    'product_images' => [
      '*' => '圖片(可多筆)',  
    ],
    'product_file' => '檔案',
    'product_files' => [
      '*' => [
        'name' => '名稱',
        'file_name' => '檔案名稱',
        'path' => '檔案',
    
        'sort' => '排序',  
      ]
    ]    
  ],
  'product_keywords' => [
    'name' => ['*' => '名稱'],

    'sort' => '排序',
    'status' => '狀態',

    'products' => '產品(可多選)',
  ],  
  'support_categories' => [
    'name' => ['*' => '名稱'],
            
    'sort' => '排序',
    'status' => '狀態',   
  ],
  'support_file_types' => [
    'name' => ['*' => '名稱'],
  ],
  'supports' => [
    'name' => ['*' => '名稱'],

    'sort' => '排序',
    'status' => '狀態',   

    'support_category_id' => '技術分類',

    'support_file' => '檔案',
    'support_files' => [
      '*' => [
        'name' => '名稱',
        'file_name' => '檔案名稱',
        'path' => '檔案',
    
        'sort' => '排序',
        'status' => '狀態',   
      ]
    ]
  ],
  'video_settings' => [
    'name' => ['*' => '名稱'],

    'youtube_key' => 'youtube_key',
    'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',

    'sort' => '排序',
    'status' => '狀態',
  ],    
  'commons' => [
    'name' => ['*' => '名稱'],
    'content' => ['*' => '內容'],

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)',
  ],  
  'contacts' => [
    'area_id' => '地區',
    'question' => '問題',
    'country' => '國家',
    'name' => '姓名',
    'email' => '信箱',
    'phone' => '電話',
    'content' => '內容',

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)',
  ],   
  'contact_settings' => [
    'area_id' => '地區',
    'email' => '信箱',
    'remark' => '備註',

    'sort' => '排序',
    'status' => '狀態',
  ],   
  'dealers' => [
    'country' => ['*' => '國家'],
    'company' => ['*' => '公司名'],

    'phone' => '電話',
    'email' => 'email',
    'website' => 'website',

    'sort' => '排序',
    'status' => '狀態',

    'areas' => '地區(可多選)',
    'product_brands' => '品牌(可多選)',    
  ],    
  'communities' => [
    'facebook' => 'Facebook',
    'instagram' => 'Instagram',
    'youtube' => 'Youtube',
  ],
  'subscription' => [
    'title' => '標題',
    'lang' => '語言',
    'content' => '內容',
  ],
];
