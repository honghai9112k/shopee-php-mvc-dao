<?php
class Ajax extends Controller
{
    public $customerDao;
    public $cartDao;

    public function __construct()
    {
        $this->customerDao = $this->dao("CustomerDao");
        $this->cartDao = $this->dao("CartDao");
    }
    public function checkUsername()
    {
        $un = $_POST["un"];
        if ($this->customerDao->checkUsername($un) == 'true') {
            echo "Username đã tồn tại.";
        }
    }
    public function minusItem()
    {
        $idBookItem = $_POST["id"];
        $check = $this->cartDao->MinusItem($idBookItem);
        if ($check) {
            echo $check;
        } else if ($check == "0") {
            echo "0";
        } else {
            echo "Fall";
        }
    }
    public function plusItem()
    {
        $idBookItem = $_POST["id"];
        $check = $this->cartDao->PlusItem($idBookItem);
        if ($check) {
            echo $check;
        } else {
            echo "Fall";
        }
    }
}
