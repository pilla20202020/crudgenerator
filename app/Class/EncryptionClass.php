<?php

namespace App\Class;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EncryptionClass
{
    protected $encryption_iv = '1234567891011121';
    protected $ciphering = "AES-128-CTR";
    protected $options = 0;
    $encryption_key = "GeeksforGeeks";

    public static function encrypt(String $string)
    {
       
        $ciphering = "AES-128-CTR";
        
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);

        
        // Non-NULL Initialization Vector for encryption
        
        // Store the encryption key
        
        // Use openssl_encrypt() function to encrypt the data
        return openssl_encrypt($string, $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv);
  
  
    }

    public static function decrypt(String $string)
    {
        // Use openssl_decrypt() function to decrypt the data
        return openssl_decrypt ($string, $this->ciphering,$this->encryption_key, $this->options, $this->encryption_iv);

    }
}