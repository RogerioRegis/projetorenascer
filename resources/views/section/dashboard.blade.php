                    <!-- begin DASHBOARD CIRCLE TILES -->
                    <div class="row">

                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/estudantes') }}">
                                    <div class="circle-tile-heading dark-blue">
                                        <i class="fa fa-graduation-cap fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-number text-faded">
                                        Estudantes
                                        <span id="sparklineA"></span>
                                    </div>
                                    <a href="{{ url('/estudantes') }}" class="circle-tile-footer">Lista de Cadastros <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/documentodoestudante') }}">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-print fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-number text-faded">
                                        Imprimir em Papel
                                    </div>
                                    <a href="{{ url('/documentodoestudante') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/estudantes') }}">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-id-card fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-number text-faded">
                                        Imprimir em Cartão PVC
                                    </div>
                                    <a href="{{ url('#') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end DASHBOARD CIRCLE TILES -->
                    