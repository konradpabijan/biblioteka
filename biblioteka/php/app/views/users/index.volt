{{ partial("parts/profile_menu") }}

<div class="col-lg-12">
    <div class="page-header">
        <h3>User <span class="text-primary">Panel</span>!</h3>
    </div>
</div>

<div class="row" style="margin-top: 30px;">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">Cras justo odio</a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                {% if transactions.count() %}
                    {% for transaction in transactions %}
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="text-primary"><strong>{{ transaction.projects.projekt_title }}</strong> {{ linkTo(["project-" ~ transaction.projekt_link, "Toon details <i class='glyphicon glyphicon-play'></i>", "class":"btn btn-default btn-xs", "style":"margin-left: 10px;"]) }}</h5>
                                <h5>Risicocategorie: {{ project.projekt_category }}</h5>
                                <h5><strong>Project is volgeschreven</strong></h5>
                            </div>
                            <div class="col-lg-3 text-right">
                                <h4><span class="label label-primary">{{ elements.differenceDateDays(project.projekt_time) }} DAGEN OVER</span></h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>Doel</h5>
                                        <h5>&euro; 40.000</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Huiding</h5>
                                        <h5>&euro; {{ project.projekt_price }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="<?php echo rand(0, 100) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo rand(0, 100) ?>%">
                                        <?php echo rand(0, 100) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h5><span class="label label-primary">INVESTER</span> <strong>104</strong> INVESTEERDERS</h5>
                            </div>
                        </div>
                        <hr />
                    {% endfor %}

                {% else %}
                    <h3 class="text-center">No Projects</h3>
                {% endif %}
            </div>
        </div>
    </div>
</div>

