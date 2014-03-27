<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['useragent']        = 'PHPMailer';              // Mail engine switcher: 'CodeIgniter' or 'PHPMailer'
$config['protocol']         = IS_WINDOWS_OS ? 'smtp' : 'mail';  // 'mail', 'sendmail', or 'smtp'
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'localhost';
$config['smtp_user']        = '';
$config['smtp_pass']        = '';
$config['smtp_port']        = 25;
$config['smtp_timeout']     = 5;                        // (in seconds)
$config['smtp_crypto']      = '';                       // '' or 'tls' or 'ssl'
$config['smtp_debug']       = 0;                        // PHPMailer's SMTP debug info level: 0 = off, 1 = commands, 2 = commands and data, 3+ = more debug output info.
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';                   // 'text' or 'html'
$config['charset']          = 'utf-8';
$config['validate']         = true;
$config['priority']         = 3;                        // 1, 2, 3, 4, 5
$config['crlf']             = "\n";                     // "\r\n" or "\n" or "\r"
$config['newline']          = "\n";                     // "\r\n" or "\n" or "\r"
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;

// An example for a Gmail Account:
/*
$config['useragent']        = 'PHPMailer';
$config['protocol']         = 'smtp';
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'smtp.gmail.com';
$config['smtp_user']        = 'yourusername@gmail.com';
$config['smtp_pass']        = 'yourpassword';
$config['smtp_port']        = 465;
$config['smtp_timeout']     = 5;
$config['smtp_crypto']      = 'ssl';
$config['smtp_debug']       = 0;
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';
$config['charset']          = 'utf-8';
$config['validate']         = true;
$config['priority']         = 3;
$config['crlf']             = "\n";
$config['newline']          = "\n";
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;
*/
