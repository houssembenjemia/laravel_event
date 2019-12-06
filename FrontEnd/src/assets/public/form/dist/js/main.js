$(document).ready(function () {
    var _stepPostion, _stepNumber;
    // Step show event
    $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        _stepPostion = stepPosition;
        _stepNumber = stepNumber;
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
        } else if (stepPosition === 'final') {
            $("#next-btn").addClass('disabled');
        } else {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
        }

        $(".finish").hide();
        if (stepPosition === 'final') {
            $(".finish").show();
        }
        /*if (_stepNumber === 3) {
            $('#smartwizard').smartWizard("next");
            return true;
        }*/
        if (_stepNumber === 1) {
            var email = $('#email').val();
            if (!validateEmail(email)) {
                var title = 'Email invalide';
                var msg = 'Entrez un email valide SVP!';
                Error(title, msg);
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            }
            var nom = $('#nom').val();
            if (nom == "") {
                var title = 'Nom vide';
                var msg = 'Le nom est obligatoire';
                Error(title, msg);
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            }

            var prenom = $('#prenom').val();
            if (prenom == "") {
                var title = 'Prénom vide';
                var msg = 'Le prénom est obligatoire';
                Error(title, msg);
                // Navigate previous        
                $('#smartwizard').smartWizard("prev");
                return true;
            }

            var tel = $('#tel').val();
            if (tel == "") {
                var title = 'Tél vide';
                var msg = 'Le Tél est obligatoire';
                Error(title, msg);
                // Navigate previous        
                $('#smartwizard').smartWizard("prev");
                return true;
            }

            var adresse = $('#adresse').val();
            if (adresse == "") {
                var title = 'Adresse vide';
                var msg = 'L\'adresse est obligatoire';
                Error(title, msg);
                // Navigate previous        
                $('#smartwizard').smartWizard("prev");
                return true;
            }
        }

    });


    // Toolbar extra buttons
    var btnFinish = $('<button></button>').text('Terminer')
            .addClass('btn btn-info finish')
            .on('click', function () {
                sendContrat();
            });
    var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function () {
                $('#smartwizard').smartWizard("reset");
            });


    // Smart Wizard
    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'circles',
        transitionEffect: 'fade',
        showStepURLhash: true,
        toolbarSettings: {
            toolbarPosition: 'bottom',
            toolbarExtraButtons: [
                btnFinish
            ]
        },
        lang: {
            next: 'Suivant',
            previous: 'Précédent'
        }
    });


    // External Button Events
    $("#reset-btn").on("click", function () {
        // Reset wizard
        $('#smartwizard').smartWizard("reset");
        return true;
    });

    $("#prev-btn").on("click", function () {
        // Navigate previous
        $('#smartwizard').smartWizard("prev");
        return true;
    });

    /*
     $(".sw-btn-next").on("click", function () {
     
     console.log(_stepNumber);
     if (_stepNumber == 1) {
     
     var nom = $('#nom').val();
     if (nom == "") {
     var title = 'Nom vide';
     var msg = 'Le nom est obligatoire';
     Error(title, msg);
     // Navigate previous
     $('#smartwizard').smartWizard("prev");
     return true;
     return false;
     }
     
     var prenom = $('#prenom').val();
     if (prenom == "") {
     var title = 'Prénom vide';
     var msg = 'Le prénom est obligatoire';
     Error(title, msg);
     // Navigate previous
     $('#smartwizard').smartWizard("prev");
     return true;
     return false;
     }
     
     var email = $('#email').val();
     if (!validateEmail(email)) {
     var title = 'Email invalide';
     var msg = 'Entrez une adresse MAIL valide SVP!';
     Error(title, msg);
     // Navigate previous
     $('#smartwizard').smartWizard("prev");
     return true;
     return false;
     }
     
     var tel = $('#tel').val();
     if (tel == "") {
     var title = 'Tél vide';
     var msg = 'Le Tél est obligatoire';
     Error(title, msg);
     // Navigate previous
     $('#smartwizard').smartWizard("prev");
     return true;
     return false;
     }
     
     var adresse = $('#adresse').val();
     if (adresse == "") {
     var title = 'Adresse vide';
     var msg = 'L\'adresse est obligatoire';
     Error(title, msg);
     // Navigate previous
     $('#smartwizard').smartWizard("prev");
     return true;
     return false;
     }
     }
     // Navigate next
     $('#smartwizard').smartWizard("next");
     return true;
     });
     */

    $("#next-btn").on("click", function () {
        // Navigate next
        $('#smartwizard').smartWizard("next");
        return true;
    });

    $("#theme_selector").on("change", function () {
        // Change theme
        $('#smartwizard').smartWizard("theme", $(this).val());
        return true;
    });

    // Set selected theme on page refresh
    $("#theme_selector").change();

    $('.datetimepicker').datepicker({
        showOtherMonths: true,
        locale: 'fr-fr'
    });
    // Revenu selon nbr personnes
    $('#personnes').change(function () {
        var value = $(this).val();
        switch (value) {
            case "1":
                $('#revenu option[value="20000"]').addClass('red');
                $('#revenu option[value="20000"]').attr('red', '1');
                $('#revenu option[value="25000"]').addClass('red');
                $('#revenu option[value="25000"]').attr('red', '1');
                $('#revenu option[value="29000"]').addClass('red');
                $('#revenu option[value="29000"]').attr('red', '1');
                $('#revenu option[value="33000"]').addClass('red');
                $('#revenu option[value="33000"]').attr('red', '1');
                break;

            case "2":
                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="20000"]').addClass('black');
                $('#revenu option[value="20000"]').attr('red', '0');


                $('#revenu option[value="25000"]').addClass('red');
                $('#revenu option[value="25000"]').attr('red', '1');
                $('#revenu option[value="29000"]').addClass('red');
                $('#revenu option[value="29000"]').attr('red', '1');
                $('#revenu option[value="33000"]').addClass('red');
                $('#revenu option[value="33000"]').attr('red', '1');
                break;

            case "3":
                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="20000"]').addClass('black');
                $('#revenu option[value="20000"]').attr('red', '0');

                $('#revenu option[value="25000"]').removeClass('red');
                $('#revenu option[value="25000"]').addClass('black');
                $('#revenu option[value="25000"]').attr('red', '0');

                $('#revenu option[value="29000"]').addClass('red');
                $('#revenu option[value="29000"]').attr('red', '1');
                $('#revenu option[value="33000"]').addClass('red');
                $('#revenu option[value="33000"]').attr('red', '1');
                break;

            case "4":
                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="20000"]').addClass('black');
                $('#revenu option[value="20000"]').attr('red', '0');

                $('#revenu option[value="25000"]').removeClass('red');
                $('#revenu option[value="25000"]').addClass('black');
                $('#revenu option[value="25000"]').attr('red', '0');

                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="20000"]').addClass('black');
                $('#revenu option[value="20000"]').attr('red', '0');

                $('#revenu option[value="29000"]').removeClass('red');
                $('#revenu option[value="29000"]').addClass('black');
                $('#revenu option[value="29000"]').attr('red', '0');

                $('#revenu option[value="33000"]').addClass('red');
                $('#revenu option[value="33000"]').attr('red', '1');
                break;

            case "5":
                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="20000"]').addClass('black');
                $('#revenu option[value="20000"]').attr('red', '0');

                $('#revenu option[value="25000"]').removeClass('red');
                $('#revenu option[value="25000"]').addClass('black');
                $('#revenu option[value="25000"]').attr('red', '0');

                $('#revenu option[value="29000"]').removeClass('red');
                $('#revenu option[value="29000"]').addClass('black');
                $('#revenu option[value="29000"]').attr('red', '0');

                $('#revenu option[value="33000"]').removeClass('red');
                $('#revenu option[value="33000"]').addClass('black');
                $('#revenu option[value="33000"]').attr('red', '0');
                $('#rdv').val('');
                $('#div_rdv').hide();
                break;

            case "+5":
                $('#revenu option[value="20000"]').removeClass('red');
                $('#revenu option[value="25000"]').removeClass('red');
                $('#revenu option[value="29000"]').removeClass('red');
                $('#revenu option[value="33000"]').removeClass('red');
                $('#rdv').val('');
                $('#div_rdv').hide();
                break;

        }
    });

    $('#revenu').change(function () {
        var red = parseInt($("#revenu option:selected").attr('red'));
        if (red === 1 && _stepNumber === 2) {
            $('#div_rdv').show();
            $('#rdv').attr('placeholder', 'Séléctionnez une date de RDV');
            $(".sw-btn-prev").hide();
            $(".sw-btn-next").hide();
            $('.finish').show();
        } else {
            $('#rdv').val('');
            $('#div_rdv').hide();
            $(".sw-btn-prev").show();
            $(".sw-btn-next").show();
            $('.finish').hide();
        }
    });


});

function sendContrat() {

    var contact = new FormData();


    // ########################### TABLE PROPRIETAIRE #####################


    contact.append('nom_pr', $('#nom_pr').val());
    contact.append('prenom_pr', $('#prenom_pr').val());
    contact.append('tel_pr', $('#tel_pr').val());
    contact.append('adresse_pr', $('#adresse_pr').val());

    // ########################### TABLE CONTACT ##########################
    contact.append('civilite', $('#civilite').val());
    contact.append('nom', $('#nom').val());
    contact.append('prenom', $('#prenom').val());
    contact.append('mobile', $('#mobile').val());
    contact.append('tel', $('#tel').val());
    contact.append('email', $('#email').val());
    contact.append('adresse', $('#adresse').val());
//    Geocode($('#adresse').val());
    contact.append('lat', $('#lat').val());
    contact.append('lng', $('#lng').val());
    contact.append('locality', $('#locality').val());
    contact.append('postal_code', $('#postal_code').val());
    contact.append('situation', $('input[name=situation]:checked').val());

    var rdv = $('#rdv').val();
    if (rdv) {
        contact.append('rdv', rdv);
        var _df = moment(rdv, 'YYYY-MM-DD HH:mm').format("LLLL");
        contact.append('rdv_formatted', _df);
    } else {
        contact.append('signature', $('#signature').val());
        var fct = $('input[name=fct]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('fct', fct);
        var avis = $('input[name=avis]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('avis', avis);
        var pc = $('input[name=pc]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('pc', pc);
        var plan_maison = $('input[name=plan_maison]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('plan_maison', plan_maison);
        var ph_parties = $('input[name=ph_parties]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('ph_parties', ph_parties);
        var surface_hb = $("#surface_hb").val();
        contact.append('surface_hb', surface_hb);
        var ph_maison = $('input[name=ph_maison]:checked').map(function () {
            return this.value;
        }).get();
        contact.append('ph_maison', ph_maison);

        // ########################### TABLE LOGEMENT ##########################
        contact.append('chauffage', $('#chauffage').val());
        contact.append('personnes', $('#personnes').val());
        contact.append('revenu', $('#revenu').val());

        // ########################### TABLE ISOLATION ##########################

        var toiture = 0;
        var comble_perdu = 0;
        if ($('#comble_perdu').is(":checked")) {
            comble_perdu = 1;
            toiture = 1;
        }

        var encuvement = 0;
        if ($('#encuvement').is(":checked")) {
            encuvement = 1;
            toiture = 1;
        }

        var mur = 0;
        var mur_interieur = 0;
        if ($('#mur_interieur').is(":checked")) {
            mur_interieur = 1;
            mur = 1;
        }

        var mur_garage = 0;
        if ($('#mur_garage').is(":checked")) {
            mur_garage = 1;
            mur = 1;
        }

        var planchers_bas = 0;
        var vide_sanitaire = 0;
        if ($('#vide_sanitaire').is(":checked")) {
            vide_sanitaire = 1;
            planchers_bas = 1;
        }
        var cave = 0;
        if ($('#cave').is(":checked")) {
            cave = 1;
            planchers_bas = 1;
        }
        var garage = 0;
        if ($('#garage').is(":checked")) {
            garage = 1;
            planchers_bas = 1;
        }
        var surface = $('input[name=surface]').map(function () {
            return this.value;
        }).get().join(',');

        var surface_toiture = $('#surface_toiture').val();
        var surface_mur = $('#surface_mur').val();
        var surface_cave = $('#surface_cave').val();
        var reference = $('#ref_client').val();
        contact.append('reference', reference);
        contact.append('toiture', toiture);
        contact.append('comble_perdu', comble_perdu);
        contact.append('encuvement', encuvement);
        contact.append('mur', mur);
        contact.append('mur_interieur', mur_interieur);
        contact.append('mur_garage', mur_garage);
        contact.append('planchers_bas', planchers_bas);
        contact.append('vide_sanitaire', vide_sanitaire);
        contact.append('cave', cave);
        contact.append('garage', garage);
        contact.append('surface', surface);
        contact.append('surface_toiture', surface_toiture);
        contact.append('surface_mur', surface_mur);
        contact.append('surface_cave', surface_cave);

    }

    if ($('#signature').val() == "") {
        var title = 'Signature Manquante';
        var msg = 'Veuillez signer SVP!';
        Error(title, msg);
        return;
    }
    if (
            $('#nom').val() !== "" &&
            $('#prenom').val() !== "" &&
            $('#email').val() !== "" &&
            $('#tel').val() !== "" &&
            $('#adresse').val() !== ""
            ) {
        if (validateEmail($('#email').val())) {
            $.ajax({
                url: urlsite + 'ajax/verif_client.php',
                type: 'post',
                data: contact,
                processData: false,
                contentType: false,
                success: function (msg) {
                    if (msg == "") {
                        $.ajax({
                            url: urlsite + 'ajax/exec.php',
                            type: 'post',
                            data: contact,
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                $('#loadingDiv').show();
                            },
                            success: function (msg) {
                                $('#loadingDiv').hide();
                                var title, _msg;
                                if (msg === 'done') {
                                    title = 'Succés';
                                    _msg = 'L\'enregistrement fait avec succés.';
                                    Success(title, _msg);
                                } else {
                                    title = 'Erreur';
                                    _msg = msg;
                                    Error(title, _msg);
                                }
                            }
                        });
                    } else {
                        var title = 'Client Existant';
                        var msg = 'Le client existe déjà dans la base de données.';
                        Error(title, msg);
                    }
                }
            });
        } else {
            var title = 'Email invalide';
            var msg = 'Entrez une adresse MAIL valide SVP!';
            Error(title, msg);
        }
    } else {
        var title = 'Données Manquantes';
        var msg = 'Les données du contact sont toutes obligatoires.';
        Error(title, msg);
    }

}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}