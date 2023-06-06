<footer class="footer mt-4 fixed-bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="footerNavbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('chamados.index') }}">Chamados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('setores.index') }}">Setores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('situacoes.index') }}">Situações</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="text-center">
        <p class="mt-2">&copy; {{ date('Y') }} Carlos Amarijo - Todos os direitos reservados</p>
      </div>
    </div>
  </footer>
  


</html
