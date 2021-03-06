<?php
interface BookDao
{
    public function getAll();
    public function createBook(BookModel $newBook,BookItemModel $newBookItem, $authorId);
    public function findBookById($Id_book);
    public function UpdateBook(BookModel $upBook,BookItemModel $upBookItem, $authorId);
    public function DeleteBook($Id_book);
    public function GetAllBookCategory();
    public function GetAllPublisher();
    public function GetAllAuthor();
    public function searchBook($key);
    public function GetBookCategory($idCategory);
}
