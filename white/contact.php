

                    <!-- LikeBtn.com BEGIN -->
                    <span class="likebtn-wrapper" data-i18n_like="I like it" data-identifier="item_1" data-dislike_enabled="false"></span>
                    <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
                    <!-- LikeBtn.com END -->

                    <br><br>

                    <h4>Оставьте комментарий</h4>
                    <br>
                    <div class="comments">
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1">Email </label>
                                        <input required type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput2">Ваше имя:</label>
                                        <input required type="text" class="form-control" id="exampleFormControlInput2" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Текст комментария</label>
                                <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Напомните мне о новых комментариях
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <button id="send-comment" type="button"  class="btn btn-lg btn-success">Отправить комментарий</button>
                            </div>
                        </form>
                        <br><br>
                        <h4>Комментарии:</h4>
                        <div class="comments-list" id="comment-list">
                        </div>
                    </div>



        <script>
            let date = Date.now();
            $('#send-comment').on('click', function () {
                $('#comment-list').append('<hr>\n' +
                    '                    <div class="comment-header row">\n' +
                    '                        <div class="col-8"><strong id="comment-name">' + $('#exampleFormControlInput2').val() + '</strong></div>\n' +
                    '                        <div class="col-4"><i id="comment-date">' + new Date(Date.now()).toLocaleString() + '</i></div>\n' +
                    '                    </div>\n' +
                    '                    <div class="row mt-2">\n' +
                    '                        <div class="col-12">\n' +
                    '                            <p id="comment-text">\n' + $('#exampleFormControlTextarea1').val() +
                    '                            </p>\n' +
                    '                        </div>\n' +
                    '                    </div>')
            });
        </script>



        <script>
            let date = Date.now();
            $('#send-comment').on('click', function () {
                $('#comment-list').append('<hr>\n' +
                    '                    <div class="comment-header row">\n' +
                    '                        <div class="col-8"><strong id="comment-name">' + $('#exampleFormControlInput2').val() + '</strong></div>\n' +
                    '                        <div class="col-4"><i id="comment-date">' + new Date(Date.now()).toLocaleString() + '</i></div>\n' +
                    '                    </div>\n' +
                    '                    <div class="row mt-2">\n' +
                    '                        <div class="col-12">\n' +
                    '                            <p id="comment-text">\n' + $('#exampleFormControlTextarea1').val() +
                    '                            </p>\n' +
                    '                        </div>\n' +
                    '                    </div>')
            });

            $('#send').on('click', function () {
                $('#thanks').removeClass('d-none');
                $('#phone').val('');
                $('#name').val('');
            });
        </script>



        <script>
            let date = Date.now();
            $('#send-comment').on('click', function () {
                $('#comment-list').append('<hr>\n' +
                    '                    <div class="comment-header row">\n' +
                    '                        <div class="col-8"><strong id="comment-name">' + $('#exampleFormControlInput2').val() + '</strong></div>\n' +
                    '                        <div class="col-4"><i id="comment-date">' + new Date(Date.now()).toLocaleString() + '</i></div>\n' +
                    '                    </div>\n' +
                    '                    <div class="row mt-2">\n' +
                    '                        <div class="col-12">\n' +
                    '                            <p id="comment-text">\n' + $('#exampleFormControlTextarea1').val() +
                    '                            </p>\n' +
                    '                        </div>\n' +
                    '                    </div>')
            });
        </script>
