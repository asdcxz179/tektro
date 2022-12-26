<?php

return [
  'menu' => [
    'users' => '管理員',
    'users_setting' => '管理員設定',
    'roles' => '角色',
    'suppliers' => '供應商管理',

    'homes' => '首頁',

    'info' => '資訊',
    'news' => '最新消息',
    'talents' => '人才招募',

    'abouts' => '關於我們',

    'product_label' => '產品品牌',
    'product_brands' => '品牌',
    'product_categories' => '分類',
    'product_tags' => '標籤',
    'product_keywords' => '關鍵字',
    'products' => '產品',    

    'assist' => '支援',
    'support_categories' => '技術分類',
    'supports' => '技術手冊',
    'video_settings' => '影音分享',
    'commons' => '常見問題',

    'connect' => '聯絡我們',
    'contacts' => '聯絡我們表單',
    'contact_settings' => '聯絡我們設定', 

    'communities' => '經銷商', 

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
  'products' => [
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],
    'details' => ['*' => 'DETAILS'],
    'technology' => ['*' => 'TECHNOLOGY'],
    'test_reviews' => ['*' => 'TEST & REVIEWS'],
    'related_products' => ['*' => 'RELATED PRODUCTS'],

    'banner' => 'banner',

    'sort' => '排序',
    'status' => '狀態',   

    'product_categories' => '分類(可多選)',
    'product_tags' => '標籤(可多選)',

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

];
