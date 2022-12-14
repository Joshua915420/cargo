<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' =>': বৈশিষ্ট্য অবশ্যই গ্রহণ করতে হবে।',
    'accepted_if' => ': বৈশিষ্ট্যটি অবশ্যই গ্রহণ করা উচিত যখন :অন্য হল :মান।',
    'active_url' => ': বৈশিষ্ট্যটি একটি বৈধ URL নয়।',
    'after' => ': বৈশিষ্ট্য অবশ্যই :date এর পরে একটি তারিখ হতে হবে।',
    'after_or_equal' => ': অ্যাট্রিবিউট অবশ্যই :date এর পরে বা তার সমান হতে হবে।',
    'alpha' => ': বৈশিষ্ট্যে শুধুমাত্র অক্ষর থাকতে হবে।',
    'alpha_dash' => ': বৈশিষ্ট্যে শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে হবে।',
    'alpha_num' => 'দ্যা : অ্যাট্রিবিউটে শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে হবে।',
    'array' => ': বৈশিষ্ট্য অবশ্যই একটি অ্যারে হতে হবে।',
    'before' => ': এট্রিবিউট অবশ্যই :date এর আগে একটি তারিখ হতে হবে।',
    'before_or_equal' => ': অ্যাট্রিবিউট অবশ্যই :date এর আগে বা সমান একটি তারিখ হতে হবে।',
    'between' => [
        'numeric' => ': অ্যাট্রিবিউট অবশ্যই :মিন এবং :max এর মধ্যে হতে হবে।',
        'file' => ': বৈশিষ্ট্য অবশ্যই :মিন এবং :ম্যাক্স কিলোবাইটের মধ্যে হতে হবে।',
        'string' => ': অ্যাট্রিবিউট অবশ্যই :min এবং :max অক্ষরের মধ্যে হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :min এবং :max আইটেমের মধ্যে থাকতে হবে।',
    ],
    'boolean' => ': বৈশিষ্ট্য ক্ষেত্র সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => 'দ্যা : অ্যাট্রিবিউট কনফার্মেশন মেলে না।',
    'current_password' => 'পাসওয়ার্ডটি ভূল.',
    'date' => ': বৈশিষ্ট্যটি একটি বৈধ তারিখ নয়।',
    'date_equals' => ': এট্রিবিউট অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'date_format' => ': বৈশিষ্ট্য ফরম্যাটের সাথে মেলে না :ফর্ম্যাট।',
    'different' => ': বৈশিষ্ট্য এবং :অন্য অবশ্যই আলাদা হতে হবে।',
    'digits' => ': বৈশিষ্ট্য অবশ্যই :ডিজিট ডিজিট হতে হবে।',
    'digits_between' => ': বৈশিষ্ট্য অবশ্যই :মিন এবং :ম্যাক্স ডিজিটের মধ্যে হতে হবে।',
    'dimensions' => 'দ্যা : অ্যাট্রিবিউটের অবৈধ ইমেজ ডাইমেনশন আছে।',
    'distinct' => ': বৈশিষ্ট্য ক্ষেত্রের একটি ডুপ্লিকেট মান রয়েছে।',
    'email' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ ইমেল ঠিকানা হতে হবে।',
    'ends_with' => ': বৈশিষ্ট্যটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শেষ হতে হবে: :values।',
    'exists' => 'নির্বাচিত: বৈশিষ্ট্যটি অবৈধ।',
    'file' => ': বৈশিষ্ট্য অবশ্যই একটি ফাইল হতে হবে।',
    'filled' => ': বৈশিষ্ট্য ক্ষেত্রের একটি মান থাকতে হবে।',
    'gt' => [
        'numeric' => ': অ্যাট্রিবিউট অবশ্যই :value-এর চেয়ে বড় হতে হবে।',
        'file' => ': বৈশিষ্ট্য অবশ্যই :মান কিলোবাইটের চেয়ে বেশি হতে হবে।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :value অক্ষরের চেয়ে বড় হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :মূল্য আইটেম এর চেয়ে বেশি থাকতে হবে।',
    ],
    'gte' => [
        'numeric' => ': বৈশিষ্ট্য অবশ্যই :মূল্যের চেয়ে বড় বা সমান হতে হবে।',
        'file' =>': বৈশিষ্ট্য অবশ্যই :মান কিলোবাইটের চেয়ে বড় বা সমান হতে হবে।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :মান অক্ষরের চেয়ে বড় বা সমান হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :মান আইটেম বা তার বেশি থাকতে হবে।',
    ],
    'image' => ': বৈশিষ্ট্য অবশ্যই একটি চিত্র হতে হবে।',
    'in' => 'নির্বাচিত: বৈশিষ্ট্যটি অবৈধ।',
    'in_array' => ': বৈশিষ্ট্য ক্ষেত্রটি :অন্যের মধ্যে বিদ্যমান নেই।',
    'integer' => ': বৈশিষ্ট্য অবশ্যই একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ আইপি ঠিকানা হতে হবে।',
    'ipv4' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt' => [
        'numeric' => ': বৈশিষ্ট্য অবশ্যই :value-এর চেয়ে কম হতে হবে।',
        'file' => ': বৈশিষ্ট্য অবশ্যই :মান কিলোবাইটের চেয়ে কম হতে হবে।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :value অক্ষরের চেয়ে কম হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :মূল্য আইটেম থেকে কম থাকতে হবে।',
    ],
    'lte' => [
        'numeric' => ': বৈশিষ্ট্য অবশ্যই :মূল্যের চেয়ে কম বা সমান হতে হবে।',
        'file' => ': বৈশিষ্ট্য অবশ্যই :মান কিলোবাইটের চেয়ে কম বা সমান হতে হবে।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :মান অক্ষরের চেয়ে কম বা সমান হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :মূল্য আইটেম এর বেশি থাকতে হবে না।',
    ],
    'max' => [
        'numeric' => ': বৈশিষ্ট্য অবশ্যই :max এর থেকে বেশি হওয়া উচিত নয়।',
        'file' => ': বৈশিষ্ট্য অবশ্যই : সর্বোচ্চ কিলোবাইটের বেশি হওয়া উচিত নয়।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :max অক্ষরের চেয়ে বেশি হওয়া উচিত নয়।',
        'array' => ': অ্যাট্রিবিউটে অবশ্যই :max এর বেশি আইটেম থাকতে হবে না।',
    ],
    'mimes' => ': বৈশিষ্ট্য অবশ্যই একটি ফাইল হতে হবে: :values।',
    'mimetypes' => ': বৈশিষ্ট্য অবশ্যই একটি ফাইল হতে হবে: :values।',
    'min' => [
        'numeric' => ': অ্যাট্রিবিউট অন্তত:মিন হতে হবে।',
        'file' => ': বৈশিষ্ট্যটি কমপক্ষে :মিন কিলোবাইট হতে হবে।',
        'string' => ': বৈশিষ্ট্যটি কমপক্ষে :মিন অক্ষরের হতে হবে।',
        'array' => ': অ্যাট্রিবিউটে কমপক্ষে :মিন আইটেম থাকতে হবে।',
    ],
    'multiple_of' => ': বৈশিষ্ট্যটি অবশ্যই :value-এর একাধিক হতে হবে।',
    'not_in' => 'নির্বাচিত: বৈশিষ্ট্যটি অবৈধ।',
    'not_regex' => ': বৈশিষ্ট্য বিন্যাস অবৈধ।',
    'numeric' => ': বৈশিষ্ট্য অবশ্যই একটি সংখ্যা হতে হবে।',
    'password' =>'পাসওয়ার্ডটি ভূল.',
    'present' => ': বৈশিষ্ট্য ক্ষেত্র অবশ্যই উপস্থিত থাকতে হবে।',
    'regex' => ': বৈশিষ্ট্য বিন্যাস অবৈধ।',
    'required' => ': বৈশিষ্ট্য ক্ষেত্র আবশ্যক।',
    'required_if' => ': বৈশিষ্ট্য ক্ষেত্রটি প্রয়োজন হয় যখন :অন্যান্য হয় :মান।',
    'required_unless' => ': বৈশিষ্ট্য ক্ষেত্রটি আবশ্যক যদি না :অন্যান্য :মানে থাকে।',
    'required_with' => ': বৈশিষ্ট্য ক্ষেত্রটি প্রয়োজন হয় যখন : মান উপস্থিত থাকে।',
    'required_with_all' => ': মান উপস্থিত থাকলে : বৈশিষ্ট্য ক্ষেত্রটি প্রয়োজন৷',
    'required_without' => ': বৈশিষ্ট্য ক্ষেত্রটি প্রয়োজন হয় যখন :values ​​উপস্থিত না থাকে।',
    'required_without_all' => ': বৈশিষ্ট্য ক্ষেত্রের প্রয়োজন হয় যখন : মানগুলির মধ্যে কোনোটিই উপস্থিত থাকে না।',
    'prohibited' => ': বৈশিষ্ট্য ক্ষেত্র নিষিদ্ধ।',
    'prohibited_if' => ': বৈশিষ্ট্য ক্ষেত্রটি নিষিদ্ধ যখন :অন্যান্য হল :মান।',
    'prohibited_unless' => ': বৈশিষ্ট্য ক্ষেত্রটি নিষিদ্ধ যদি না :অন্যটি :মানে না থাকে।',
    'prohibits' => ': বৈশিষ্ট্য ক্ষেত্র :অন্যকে উপস্থিত হতে নিষেধ করে।',
    'same' => ': বৈশিষ্ট্য এবং :অন্য অবশ্যই মিলবে।',
    'size' => [
        'numeric' => ': বৈশিষ্ট্য অবশ্যই :size হতে হবে।',
        'file' => ': বৈশিষ্ট্য অবশ্যই :সাইজ কিলোবাইট হতে হবে।',
        'string' => ': বৈশিষ্ট্য অবশ্যই :সাইজ অক্ষর হতে হবে।',
        'array' => ': বৈশিষ্ট্যে অবশ্যই :সাইজ আইটেম থাকতে হবে।',
    ],
    'starts_with' => ': বৈশিষ্ট্যটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শুরু করতে হবে: :values।',
    'string' => ': বৈশিষ্ট্য অবশ্যই একটি স্ট্রিং হতে হবে।',
    'timezone' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ টাইমজোন হতে হবে।',
    'unique' => ': বৈশিষ্ট্য ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => ': বৈশিষ্ট্য আপলোড করতে ব্যর্থ হয়েছে।',
    'url' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ URL হতে হবে।',
    'uuid' => ': বৈশিষ্ট্য অবশ্যই একটি বৈধ UUID হতে হবে।',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for  attributes using the
    | convention " attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given  attribute rule.
    |
    */

    'custom' => [
        ' attribute-name' => [
            'rule-name' => 'কাস্টম-বার্তা',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation  Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our  attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    ' attributes' => [],

];