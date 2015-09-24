        // Esta función es llamada cuando se hace click en una fecha
        function selected(cal, date) {
                        cal.sel.value = date; // Actualiza la fecha en el campo de texto
                        cal.callCloseHandler();
                       /* if(!document.id('reporteventasproducto'))
                        document.forms[0].submit();*/
        }

        // Esta función es llamada al seleccionar una fecha
        // o al hacer click en el boton "Cerrar". Esconde el calendario sin destruirlo
        function closeHandler(cal) {
                cal.hide();                        // hide the calendar
        }

        function calendario(id, formato) {
                var el = document.getElementById(id);
                if (calendar != null) {
                        // ya tenemos un calendario creado
                        calendar.hide();                 // lo escondemos primero.
                }
            else {
                        // la primera llamada, crea el calendario.
                        var cal = new Calendar(true, null, selected, closeHandler);
                        // si descomentas la siguiente línea se esconden los números de las semanas
                        // cal.weekNumbers = false;
                        calendar = cal;                  // remember it in the global var
                        cal.setRange(1950, 2070);        // min/max año permitido.
                        cal.create();
                }
                calendar.setDateFormat(formato);    // establece el formato especificado para la fecha
                calendar.parseDate(el.value);      // trata de parsear el texto en el campo
                calendar.sel = el;                 // indica que campo de texto se usa
                calendar.showAtElement(el);        // muestra el calendario bajo el campo
        }