<?php include "header.php"; ?>


<div class="wild-container ">
    <div class="container-fluid padding-less first-row col-lg-offset-1 col-lg-10">

        <ul id="admin_account" class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#add_concert">Добавить выступление</a>
            </li>
            <li>
                <a data-toggle="tab" href="#edit_concert">Изменить концерт</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="add_concert" class="tab-pane fade in active">
                <h3>Добавление выступления</h3>

                <div class="col-lg-10 col-lg-offset-1">
                    <form id="add_good_form" role="form">
                        <div class="form-group row">
                            <label for="title" class="col-form-label">Название</label>
                            <div>
                                <input class="form-control" type="text" placeholder="Название группы" id="title" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class=" col-form-label">Страна</label>
                            <div>
                                <input class="form-control" type="text" placeholder="Страна" id="country" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-form-label">Жанр</label>
                            <div >
                                <input class="form-control" type="text" placeholder="Жанр" id="genre" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="concert_city" class="col-form-label">Город выступления</label>
                            <div >
                                <input class="form-control" type="text" placeholder="Город выступления" id="concert_city" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="concert_club" class="col-form-label">Название клуба</label>
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="Название клуба" id="concert_club" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class=" col-form-label">Дата выступления</label>
                            <div >
                                <input class="form-control" type="date" placeholder="Дата выступления" id="date" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-form-label">Цена</label>
                            <div >
                                <input class="form-control" type="number" placeholder="Стоимость билета" id="price" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="preview" class=" col-form-label">Фото группы</label>
                            <div >
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-default">
                                            Выбрать
                                            <input id="preview" type="file" style="display: none;" multiple>
                                        </span>
                                    </label>
                                    <input id="choosen_file" type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-right btn-add-good">
                            <button type="submit" class="btn btn-default">Добавить</button>
                        </div>
                    </form>
                </div>

            </div>
            <div id="edit_concert" class="tab-pane fade">
                                    <h3>Изменение выступления</h3>
            </div>
        </div>
    </div>

    <?php include "footer.php";  ?>
