<?php

    namespace classes;

    class captcha {

        public function checkResponse() {
            if (isset($_POST["token_response"])) {
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $secret = '6Lfzjw8cAAAAABYZpAY178_bZTGsFK2vwNTsQPSc';
                $response = $_POST["token_response"];
                $request = file_get_contents($url . '?secret=' . $secret . '&response=' . $response);
                $result = json_decode($request);
                if ($result->success === false || $result->score <= 0.5) {
                    header("Location: ../index.php?error=botdetected");
                    exit;
                }
            }
        }

    }