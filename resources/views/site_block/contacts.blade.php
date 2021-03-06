
<!-- Content -->
<div class="col-lg-9 col-md-8 col-lg-push-3 col-md-push-4">


    <h4><center>Контакти</center></h4>
    <!-- Tabs -->

        <div class="tile-tabs padding-top padding-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#support" class="tab active" data-toggle="tab">
                        <h3 class="tab-title">Потрібна підтримка?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#sales" class="tab" data-toggle="tab">
                        <h3 class="tab-title">Запити по продажу</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#bug" class="tab" data-toggle="tab">
                        <h3 class="tab-title">Знайшли помилку?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </a>
                </div>
            </div><!-- .row -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane transition fade scale in active" id="support">
                    <h4>Leave a Ticket</h4>
                    <form method="post" class="row" autocomplete="off">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Name*" required>
                        </div>

                        <input type="hidden" name="type" value="1" required>

                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="7" placeholder="Comment"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block space-top-none space-bottom-none">Leave a Ticket</button>
                        </div>
                    </form>
                </div><!-- .tab-pane -->
                <div role="tabpanel" class="tab-pane transition fade scale" id="sales">
                    <h4>Ask Your Question</h4>
                    <form method="post" class="row" autocomplete="off">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Name*" required>
                        </div>

                        <input type="hidden" name="type" value="2" required>

                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="7" placeholder="Question"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block space-top-none space-bottom-none">Ask Your Question</button>
                        </div>
                    </form>
                </div><!-- .tab-pane -->
                <div role="tabpanel" class="tab-pane transition fade scale" id="bug">
                    <h4>Report Bug</h4>
                    <form method="post" class="row" autocomplete="off">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Name*" required>
                        </div>

                        <input type="hidden" name="type" value="3" required>


                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="7" placeholder="Describe Bug"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block space-top-none space-bottom-none">Report Bug</button>
                        </div>
                    </form>
                </div><!-- .tab-pane -->
            </div><!-- .tab-content -->
        </div><!-- .tile-tabs -->

</div><!-- .col-lg-9.col-md-8 -->


