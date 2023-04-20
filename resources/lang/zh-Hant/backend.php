<?php

return [
  'lang' => [
    'zh-Hant' => '中文',
    'en'  =>  '英文',
  ],
  'menu' => [
    'seo' => '關鍵字管理',
    'web_setting' =>  '網站設定',
    'users' => '管理員',
    'users_setting' => '管理員設定',
    'roles' => '角色',
    'suppliers' => '供應商管理',
    'messages'  =>  '電子報',
    'support_files' =>  '技術手冊檔案',
    'warranty_settings' => '保固條款',
    'warranties' => '保固條款',

    'homes' => '首頁',
    'header_banners' => '選單小圖',
    'home_products' =>  '首頁產品',
    'home_news_carousels' =>  '首頁圖文輪播',
    'home_carousels'  =>  '首頁輪播',
    'product_images'  =>  '產品圖片',
    'home_brands' =>  '首頁品牌介紹',
    'home_webs' =>  '首頁網站描述',
    'home_videos' =>  '首頁影片',
    'home_news' =>  '首頁最新消息',
    'home_images' =>  '首頁圖片',
    'web_settings'  =>  '網站設定',
    'product_files' =>  '產品檔案',

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
  'web_settings'  =>  [
    '*' =>  [
      'author'  =>  '作者',
      'title' =>  '網站標題',
      'keyword' => '關鍵字',
      'description' => '描述',
      'copyright'  =>  '版權宣告',
    ]
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
    'permissions' => '角色權限',
    'id'  =>  'id',
    'guard_name'  =>  '群祖名',
  ],
  'users' => [
    'name' => '名稱',
    'email' => '信箱',
    'roles' => '角色',
    'password' => '密碼',
    'password_error' => '密碼錯誤',
    'password_confirmation' => '密碼確認',
    'status' => '狀態',
    'id'  =>  'id',
  ],  
  'homes' => [
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'home_type_id' => '模組',

    'show_date' => '顯示日期',
    'banner' => '圖片',

    'sort' => '排序',
    'status' => '狀態',
    'id'  =>  'id',

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
        'button_link' =>  '按鈕連結',
        'type'  =>  '類型',
        'sort' => '排序',  
        'product_id' => '產品',  
      ],
      'youtube_key' => 'youtube_key',
    ]  
  ],  
  'home_products' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
    'product_name' => '產品名稱',
  ],
  'home_news_carousels' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
  ],
  'home_images' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
  ],
  'home_news' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
  ],
  'home_videos' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'youtube_key' => 'youtube_key',
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
  ],
  'home_webs' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
  ],
  'home_brands' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      'youtube_key' => 'youtube_key',
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
    'link' => '連結',
  ],
  'home_carousels' => [
    '*' => [
      'brand' => '品牌',
      'title' => '標題',
      'big_title' => '大標題',
      'small_title' => '小標題',
      'title' => '標題',

      
      'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',
      'link' => '連結',
      'button_link' =>  '按鈕連結',
    ],
    'path' => '圖片',
    'type'  =>  '類型',
    'product_id' => '產品', 
    'sort' => '排序',
    'id' => 'id',
    'home_id'  =>  '首頁id',
    'youtube_key' => 'youtube_key',
  ],
  'header_banners' => [
    'name' => '名稱',
    'path' => '圖片',
  ],  
  'news' => [
    'id'  =>  'id',
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],
    '*' =>  [
      'name' => '名稱',
      'description' => '描述',
      'content' => '內容',
    ],

    'show_date' => '顯示日期',
    'banner' => '封面圖',
    'up_image' => '上方主圖',

    'sort' => '排序',
    'status' => '狀態',
  ],
  'talents' => [
    'id'  =>  'id',
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],
    '*' =>  [
      'name' => '名稱',
      'description' => '描述',
      'content' => '內容',
    ],
    'show_date' => '顯示日期',
    'banner' => '封面圖',
    'up_image' => '上方主圖',

    'sort' => '排序',
    'status' => '狀態',
  ],  
  'abouts' => [
    'name' => ['*' => '名稱'],
    '*' =>  [
      'name'  =>  '名稱',
      'content'  => '內容',
    ],
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
    '*' => [
      'advertise_title' => '廣告標題',
      'advertise_subtitle' => '廣告副標題',
      'below_advertise_title' => '下方廣告標題',
      'below_advertise_subtitle' => '下方廣告副標題',
    ],
    'file_data_name'  =>  '檔案名稱',
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
    '*' =>  [
      'name'  =>  '名稱',
    ],

    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)'
  ],
  'product_tags' => [
    'name' => ['*' => '名稱'],
    '*' =>  [
      'name' => '名稱'
    ],
    
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
    'id' => 'id',
    'name' => [
      'zh-Hant' => '中文語系 名稱',
      'en' => '英文語系 名稱',
      '*' => '名稱',
    ],
    '*' => [
      'name' => '名稱',
    ],

    'path' => '圖片',

    'sort' => '排序',
    'status' => '狀態',

    'product_brands' => '品牌(可多選)'
  ],  
  'products' => [
    'keyword' => ['*' => '關鍵字'],
    'dealer_link' => '經銷商連結',
    'name' => ['*' => '名稱'],
    'description' => ['*' => '描述'],
    'content' => ['*' => '內容'],
    'details' => ['*' => 'DETAILS'],
    'technology' => ['*' => 'TECHNOLOGY'],
    'test_reviews' => ['*' => 'TEST & REVIEWS'],
    'related_products' => 'RELATED PRODUCTS',
    'attribute' => ['*' => '功能屬性'],
    'id'  =>  'id',
    '*' =>  [
      'keyword' => '關鍵字',
      'dealer_link' => '經銷商連結',
      'name' => '名稱',
      'description' => '描述',
      'content' => '內容',
      'details' => 'DETAILS',
      'technology' => 'TECHNOLOGY',
      'test_reviews' => 'TEST & REVIEWS',
      'related_products' => 'RELATED PRODUCTS',
      'attribute' => '功能屬性',
    ],

    'banner' => '產品列表小圖',

    'sort' => '排序',
    'status' => '狀態',   
    'new' => '最新產品',

    'product_categories' => '產品類別(可多選)',
    'product_icons' => '技術icon(可多選)',
    'product_tags' => '自行車類別(可多選)',
    'product_special' => '特殊類別(可多選)',
    'product_relevants' => '相關產品',

    'product_images' => [
      '*' => '圖片(可多筆)',  
      'path'  =>  '圖片',
      'product_id'  =>  '產品id',
      'id'  =>  'id',
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
  'product_files' => [
    '*' => [
      'name' => '名稱',
      
    ],
    'file_name' => '檔案名稱',
    'path' => '檔案',
    'product_id'  =>  '產品id',
    'sort' => '排序',  
    'id'  =>  'id',
  ],
  'product_images' => [
    '*' => '圖片(可多筆)',  
    'path'  =>  '圖片',
    'product_id'  =>  '產品id',
    'id'  =>  'id',
  ],
  'product_keywords' => [
    'name' => ['*' => '名稱'],
    '*' => [
      'name' => '名稱',
    ],
    'sort' => '排序',
    'status' => '狀態',

    'products' => '產品(可多選)',
  ],  
  'seo' => [
    'name'  =>  '頁面',
    'title' => ['*' => '網站標題'],
    'keyword' => ['*' => '關鍵字'],
    'description' => ['*' => '描述'],
    '*' => [
      'author'  =>  '作者',
      'title' =>  '網站標題',
      'keyword' => '關鍵字',
      'description' => '描述',
      'copyright'  =>  '版權宣告',
    ]
  ],
  'web_setting' => [
    'title' => ['*' => '網站標題'],
    'keyword' => ['*' => '關鍵字'],
    'description' => ['*' => '描述'],
    'author' => ['*' => '作者'],
    'copyright' => ['*' => '版權宣告'],
  ],
  'support_categories' => [
    'name' => ['*' => '名稱'],
    '*' =>  [
      'name'  =>  '名稱',
    ],
    'id'  =>  'id',
    'sort' => '排序',
    'status' => '狀態',   
  ],
  'support_file_types' => [
    'name' => ['*' => '名稱'],
  ],
  'supports' => [
    'name' => ['*' => '名稱'],
    '*' =>  [
      'name' => '名稱',
    ],
    'id'  =>  'id',
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
  'support_files' => [
    '*' => [
      'name' => '名稱',
    ],
    'path' => '檔案',
    'file_name' => '檔案名稱',
    'id'  =>  'id',
    'support_id'  =>  '技術手冊id',
    'support_file_type_id'  =>  '檔案分類',
    'sort' => '排序',
    'status' => '狀態',  
  ],
  'warranties' => [
    '*' => [
      'content' => '內容',
    ],
    'content' => '內容',
  ],
  'warranty_settings' => [
    '*' => [
      'content' => '內容',
    ],
  ],
  'video_settings' => [
    'name' => ['*' => '名稱'],
    'id'  =>  'id',
    '*' =>  [
      'name'  =>  '名稱',
    ],

    'youtube_key' => 'youtube_key',
    'youtube_key_info' => '分享 → https://youtu.be/fiuA1hZrDtU → 複製fiuA1hZrDtU',

    'sort' => '排序',
    'status' => '狀態',
  ],    
  'commons' => [
    'name' => ['*' => '名稱'],
    'content' => ['*' => '內容'],
    '*' =>  [
      'name' => '名稱',
      'content' => '內容',
      'show'  =>  '顯示',
    ],
    'show'  =>  '顯示',
    'sort' => '排序',
    'status' => '狀態',
    'id'  =>  'id',
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
    'remark'  =>  '備註',

    'sort' => '排序',
    'status' => '狀態',
    'created_at' => '詢問時間',

    'product_brands' => '品牌(可多選)',
  ],   
  'contact_settings' => [
    'area_id' => '地區',
    'email' => '信箱',
    'remark' => '備註',

    'sort' => '排序',
    'status' => '狀態',
    'id'  =>  'id',
  ],   
  'dealers' => [
    'country' => ['*' => '國家'],
    'company' => ['*' => '公司名'],
    '*' =>  [
      'country' => '國家',
      'company' => '公司名',
    ],
    'id'  =>  'id',
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
    '*' => [
      'facebook' => 'Facebook',
      'instagram' => 'Instagram',
      'youtube' => 'Youtube',
    ]
  ],
  'subscription' => [
    'title' => '標題',
    'lang' => '語言',
    'content' => '內容',
  ],
  'messages' => [
    'title' => '標題',
    'lang' => '語言',
    'content' => '內容',
    'emails'  =>  '發送信箱',
    'id'  =>  'id',
  ],
];
