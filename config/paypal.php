<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08-05-16
 * Time: 16:19
 */


return array(
    // set your paypal credential
    'client_id' => 'AQeHIvlvO0dQUaWYi6aog_mw_K1kQO-PNCJWl3AKIdKDzTvYAKLG0AxWFnKTP2ukAynpBRKUyCg49qG5',
    'secret' => 'EL7lCqqcIWpsw7LLX2Hvb4vXyir2LBz897Sm82oF97ibJz9-6Jyvbe68_xag9PzCOrVW2Aj4XMcHEJrR',


    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path(). '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);