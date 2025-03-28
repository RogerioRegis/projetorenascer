
<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        <img class="img img-logout" src="/img/Logo_URES.png" alt="pmbv">
        <h3>
            <i class="fa fa-sign-out text-green"></i> Pronto para ir?
        </h3>
        <p>Selecione "Sair" abaixo se você está pronto<br> para encerrar sua sessão atual.</p>
        <ul class="list-inline">
            <li>

                <a href="{{ url('/logout') }}" class="btn btn-red"
                   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                    <strong>Sair Agora</strong>
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </li>
            <li>
                <button class="logout_close btn btn-green">Cancelar</button>
            </li>
        </ul>
    </div>
</div>
<!-- /#logout -->