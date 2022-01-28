<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryBoy extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name','email', 'phone_number','avatar',
     'dob', 'blood_group','commission','password', 'active_status', 'availability_status', 'address',
      'city', 'country_id', 'state_id', 'zip_code', 'vechile_name', 'owner_name', 'vechile_color',
       'vechile_registration_no', 'vechile_details','driving_license_no', 'vechile_rc_book_no','account_name',
        'account_number','gpay_number','bank_address','ifsc_code', 'branch_name'];
}
