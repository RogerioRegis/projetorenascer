<li class="pull-right">
    <div class="btn btn-green btn-square date-picker">
        <i class="fa fa-calendar"></i>
        <script language="JavaScript">
            document.write("<font color='#fff' size='3' face='arial'>")
            var mydate = new Date()
            var year = mydate.getYear()
            if (year < 2000)
                year += (year < 1900) ? 1900 : 0
            var day = mydate.getDay()
            var month = mydate.getMonth()
            var daym = mydate.getDate()
            if (daym < 10)
                daym = "0" + daym
            var dayarray = new Array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado")
            var montharray = new Array(" de Janeiro de ", " de Fevereiro de ", " de Março de ", "de Abril de ", "de Maio de ", "de Junho de ", "de Julho de ", "de Agosto de ", "de Setembro de ", " de Outubro de ", " de Novembro de ", " de Dezembro de ")
            document.write("   " + dayarray[day] + ", " + daym + " " + montharray[month] + year + " ")
            document.write("</b></i></font>")
        </script>

    </div>
</li>


