<?php
class Home extends connect {
    function __construct($connect)
    {
        parent::__construct($connect);
    }

    public function getNameEmployer() {
        $req = $this -> _connect ->query("SELECT * FROM employe WHERE sexe='F'");
        $res = $req -> fetchall();
        return $res;
    }
}
?>