<?php
// Copyright (c) 2011 Antoni Sobkowicz for PHP version
// Copyright (c) 2006 Damien Miller <djm@mindrot.org>
// Copyright (c) 2007 Derek Slager
//
// Permission to use, copy, modify, and distribute this software for any
// purpose with or without fee is hereby granted, provided that the above
// copyright notice and this permission notice appear in all copies.
//
// THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
// WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
// ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
// WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
// ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
// OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
ini_set('max_execution_time', 300); 
include "bcrypt.php";
$bcryptclass = new bcrypt();
$in_str = 'testpassword';
$passwordBytes = array();
foreach (str_split($in_str) as $chr) {
    $passwordBytes[] = ord($chr);
}
$passwordBytes[] = ord("\0");
        print_r($passwordBytes);
        $saltBytes = $bcryptclass->decode_base64("GhvM8sjk982j0ln.9.782",16);
        print_r($saltBytes);
        $hashed = $bcryptclass->crypt_raw($passwordBytes, $saltBytes, 6);
        print_r($hashed);
        echo $bcryptclass->encode_base64($hashed, (6 * 4) - 1);
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
