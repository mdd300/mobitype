<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fo_login {

    /**O nome padrão da sessão
     * @var string
     */
    public static $session_name = "MobiSys_session";

    /**
     * Nome da sessão para o nível de acesso de usuário
     * @var type
     */
    public static $access_user = "access_user";

    /**
     * Nome da sessão para o nível de acesso de manager
     * @var type
     */
    public static $access_manager = "access_manager";

    /**
     * O tipo padrão de acesso, quando não passado
     * @var type
     */

    public static $default_access_type = "access_user";
//    public static $default_access_type = "access_manager";
    public static $default_login_uri = "login/index";

    public function __construct()
    {
        $CI = &get_instance();
    }

    /**
     * Método para criptografar uma senha no formato que utilizamos
     * @param null $password
     * @return bool|mixed|string
     */
    public static function encrypt_password($password = null)
    {
        if (!empty($password)) {
            return password_hash($password, PASSWORD_BCRYPT);
        } else {
            return false;
        }
    }


    /**Método para verificar se uma senha fornecida está de acordo com um hash do banco
     * @param $password
     * @param $user_hash
     * @return bool
     */
    public static function check_password($password, $user_hash)
    {

        return password_verify($password, $user_hash);

    }


    public static function get()
    {

        $CI = &get_instance();

        if ($CI->session->userdata(self::$session_name)) {
            return $CI->session->userdata(self::$session_name);
        } else {
            return false;
        }
    }


    /**
     * Método para finalizar a sessão e voltar para a tela de login
     */
    public static function logout()
    {

        $CI = &get_instance();
        $CI->session->unset_userdata(self::$session_name);


    }


}
