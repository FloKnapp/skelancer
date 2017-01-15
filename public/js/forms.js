(function() {

    var ns = faulancer.namespace('dialog');

    var _event = {

        onErrorFieldInput: function() {

            if (this.value.length > 0) {
                this.classList.remove('field-error');
            }

        }

    };

    var _handler = {

        handleErrorFields: function() {

            var errorInputs = document.querySelectorAll('.field-error');

            for (var i = 0; i < errorInputs.length; i++) {
                errorInputs[i].addEventListener('keyup', _event.onErrorFieldInput);
            }

        }

    };

    ns.forms = {

        init: function() {

            _handler.handleErrorFields();

        }

    };

    window.addEventListener('load', ns.forms.init);

})();
