<?php
    class Ticket
    {
        private $codiTicket;
        private $estatTicket;

        /* CONSTRUCTORS */
        public function __construct()
        {
            $args = func_get_args();
            $num = func_num_args();
            $f='__construct'. $num;
            if (method_exists($this, $f)) {
                call_user_func_array(array($this,$f), $args);
            }
        }

        public function __construct2($codiTicket, $estatTicket)
        {
            $this->codiTicket = $codiTicket;
            $this->estatTicket = $estatTicket;
        }

        /* GETTERS */
        public function getCodiTicket()
        {
            return $this->codiTicket;
        }

        public function getEstatTicket()
        {
            return $this->estatTicket;
        }

        /* SETTERS */
        public function setCodiTicket($codiTicket)
        {
            $this->codiTicket = $codiTicket;
        }

        public function setEstatTicket($estatTicket)
        {
            $this->estatTicket = $estatTicket;
        }

        /* MÈTODES */
        public function validarTicket()
        {
            if (isset($_POST['validar'])) {
                if ($_POST['codiTicket']=="T1234") {
                    echo "<h2>Aquest ticket és VÀLID</h2>";
                }
                if ($_POST['codiTicket']=="T2345") {
                    echo "<h2>Aquest ticket ja està VALIDAT</h2>";
                } elseif (!($_POST['codiTicket']=="T2345") || !($_POST['codiTicket']=="T1234")) {
                    echo "<h2>Aquest ticket NO ÉS VÀLID</h2>";
                }
            }
        }
    }
?>
