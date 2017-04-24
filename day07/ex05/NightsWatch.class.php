<?php
    class NightsWatch implements IFighter{
        private $ar;

        public function recruit($fighter)
        {
            $this->ar[] = $fighter;
        }

        public function fight()
        {
            foreach ($this->ar as $fight)
            {
                if ($fight instanceof IFighter)
                    $fight->fight();
            }
        }
    }