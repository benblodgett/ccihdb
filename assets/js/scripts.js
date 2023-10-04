"use strict";

! function(CCIH, $) {
    "use strict";

    CCIH.Package.name = "CCIH";
    CCIH.Package.version = "1.0";
    var $win = $(window),
        $body = $('body'),
        $doc = $(document),
        //class names
        _body_theme = 'nio-theme',
        _menu = 'nk-menu',
        _mobile_nav = 'mobile-menu',
        _header = 'nk-header',
        _header_menu = 'nk-header-menu',
        _aside = 'nk-aside',
        //breakpoints
        _break = CCIH.Break;

    function extend(obj, ext) {
        Object.keys(ext).forEach(function(key) {
            obj[key] = ext[key];
        });
        return obj;
    } // ClassInit @v1.0


    CCIH.ClassBody = function() {
        CCIH.AddInBody(_aside);
    }; // ClassInit @v1.0


    CCIH.ClassNavMenu = function() {
        CCIH.BreakClass('.' + _header_menu, _break.lg, {
            timeOut: 0
        });
        CCIH.BreakClass('.' + _aside, _break.lg, {
            timeOut: 0
        });
        $win.on('resize', function() {
            CCIH.BreakClass('.' + _header_menu, _break.lg);
            CCIH.BreakClass('.' + _aside, _break.lg);
        });
    }; // Code Prettify @v1.0


    CCIH.Prettify = function() {
        window.prettyPrint && prettyPrint();
    }; // Copied @v1.0


    CCIH.Copied = function() {
        var clip = '.clipboard-init',
            target = '.clipboard-text',
            sclass = 'clipboard-success',
            eclass = 'clipboard-error'; // Feedback

        function feedback(el, state) {
            var $elm = $(el),
                $elp = $elm.parent(),
                copy = {
                    text: 'Copy',
                    done: 'Copied',
                    fail: 'Failed'
                },
                data = {
                    text: $elm.data('clip-text'),
                    done: $elm.data('clip-success'),
                    fail: $elm.data('clip-error')
                };
            copy.text = data.text ? data.text : copy.text;
            copy.done = data.done ? data.done : copy.done;
            copy.fail = data.fail ? data.fail : copy.fail;
            var copytext = state === 'success' ? copy.done : copy.fail,
                addclass = state === 'success' ? sclass : eclass;
            $elp.addClass(addclass).find(target).html(copytext);
            setTimeout(function() {
                $elp.removeClass(sclass + ' ' + eclass).find(target).html(copy.text).blur();
                $elp.find('input').blur();
            }, 2000);
        } // Init ClipboardJS


        if (ClipboardJS.isSupported()) {
            var clipboard = new ClipboardJS(clip);
            clipboard.on('success', function(e) {
                feedback(e.trigger, 'success');
                e.clearSelection();
            }).on('error', function(e) {
                feedback(e.trigger, 'error');
            });
        } else {
            $(clip).css('display', 'none');
        }

        ;
    }; // CurrentLink Detect @v1.0


    CCIH.CurrentLink = function() {
        var _link = '.nk-menu-link, .menu-link, .nav-link',
            _currentURL = window.location.href,
            fileName = _currentURL.substring(0, _currentURL.indexOf("#") == -1 ? _currentURL.length : _currentURL.indexOf("#")),
            fileName = fileName.substring(0, fileName.indexOf("?") == -1 ? fileName.length : fileName.indexOf("?"));

        $(_link).each(function() {
            var self = $(this),
                _self_link = self.attr('href');

            if (fileName.match(_self_link)) {
                self.closest("li").addClass('active current-page').parents().closest("li").addClass("active current-page");
                self.closest("li").children('.nk-menu-sub').css('display', 'block');
                self.parents().closest("li").children('.nk-menu-sub').css('display', 'block');
            } else {
                self.closest("li").removeClass('active current-page').parents().closest("li:not(.current-page)").removeClass("active");
            }
        });
    }; // PasswordSwitch @v1.0


    CCIH.PassSwitch = function() {
        CCIH.Passcode('.passcode-switch');
    }; // Toastr Message @v1.0 


    CCIH.Toast = function(msg, ttype, opt) {
        var ttype = ttype ? ttype : 'info',
            msi = '',
            ticon = ttype === 'info' ? 'ni ni-info-fill' : ttype === 'success' ? 'ni ni-check-circle-fill' : ttype === 'error' ? 'ni ni-cross-circle-fill' : ttype === 'warning' ? 'ni ni-alert-fill' : '',
            def = {
                position: 'bottom-right',
                ui: '',
                icon: 'auto',
                clear: false
            },
            attr = opt ? extend(def, opt) : def;
        attr.position = attr.position ? 'toast-' + attr.position : 'toast-bottom-right';
        attr.icon = attr.icon === 'auto' ? ticon : attr.icon ? attr.icon : '';
        attr.ui = attr.ui ? ' ' + attr.ui : '';
        msi = attr.icon !== '' ? '<span class="toastr-icon"><em class="icon ' + attr.icon + '"></em></span>' : '', msg = msg !== '' ? msi + '<div class="toastr-text">' + msg + '</div>' : '';

        if (msg !== "") {
            if (attr.clear === true) {
                toastr.clear();
            }

            var option = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": attr.position + attr.ui,
                "closeHtml": '<span class="btn-trigger">Close</span>',
                "preventDuplicates": true,
                "showDuration": "1500",
                "hideDuration": "1500",
                "timeOut": "2000",
                "toastClass": "toastr",
                "extendedTimeOut": "3000"
            };
            toastr.options = extend(option, attr);
            toastr[ttype](msg);
        }
    }; // Toggle Screen @v1.0


    CCIH.TGL.screen = function(elm) {
        if ($(elm).exists()) {
            $(elm).each(function() {
                var ssize = $(this).data('toggle-screen');

                if (ssize) {
                    $(this).addClass('toggle-screen-' + ssize);
                }
            });
        }
    }; // Toggle Content @v1.0


    CCIH.TGL.content = function(elm, opt) {
        var toggle = elm ? elm : '.toggle',
            $toggle = $(toggle),
            $contentD = $('[data-content]'),
            toggleBreak = true,
            toggleCurrent = false,
            def = {
                active: 'active',
                content: 'content-active',
                "break": toggleBreak
            },
            attr = opt ? extend(def, opt) : def;
        CCIH.TGL.screen($contentD);
        $toggle.on('click', function(e) {
            toggleCurrent = this;
            CCIH.Toggle.trigger($(this).data('target'), attr);
            e.preventDefault();
        });
        $doc.on('mouseup', function(e) {
            if (toggleCurrent) {
                var $toggleCurrent = $(toggleCurrent),
                    $s2c = $('.select2-container'),
                    $dpd = $('.datepicker-dropdown'),
                    $tpc = $('.ui-timepicker-container');

                if (!$toggleCurrent.is(e.target) && $toggleCurrent.has(e.target).length === 0 && !$contentD.is(e.target) && $contentD.has(e.target).length === 0 && !$s2c.is(e.target) && $s2c.has(e.target).length === 0 && !$dpd.is(e.target) && $dpd.has(e.target).length === 0 && !$tpc.is(e.target) && $tpc.has(e.target).length === 0) {
                    CCIH.Toggle.removed($toggleCurrent.data('target'), attr);
                    toggleCurrent = false;
                }
            }
        });
        $win.on('resize', function() {
            $contentD.each(function() {
                var content = $(this).data('content'),
                    ssize = $(this).data('toggle-screen'),
                    toggleBreak = _break[ssize];

                if (CCIH.Win.width > toggleBreak) {
                    CCIH.Toggle.removed(content, attr);
                }
            });
        });
    }; // ToggleExpand @v1.0


    CCIH.TGL.expand = function(elm, opt) {
        var toggle = elm ? elm : '.expand',
            def = {
                toggle: true
            },
            attr = opt ? extend(def, opt) : def;
        $(toggle).on('click', function(e) {
            CCIH.Toggle.trigger($(this).data('target'), attr);
            e.preventDefault();
        });
    }; // Dropdown Menu @v1.0


    CCIH.TGL.ddmenu = function(elm, opt) {
        var imenu = elm ? elm : '.nk-menu-toggle',
            def = {
                active: 'active',
                self: 'nk-menu-toggle',
                child: 'nk-menu-sub'
            },
            attr = opt ? extend(def, opt) : def;
        $(imenu).on('click', function(e) {
            if (CCIH.Win.width < _break.lg || $(this).parents().hasClass(_aside)) {
                CCIH.Toggle.dropMenu($(this), attr);
            }

            e.preventDefault();
        });
    }; // Show Menu @v1.0


    CCIH.TGL.showmenu = function(elm, opt) {
        var toggle = elm ? elm : '.nk-nav-toggle',
            $toggle = $(toggle),
            $contentD = $('[data-content]'),
            toggleBreak = $contentD.hasClass(_header_menu) ? _break.lg : _break.xl,
            toggleOlay = _header + '-overlay',
            toggleClose = {
                profile: true,
                menu: false
            },
            def = {
                active: 'toggle-active',
                content: _header + '-active',
                body: 'nav-shown',
                overlay: toggleOlay,
                "break": toggleBreak,
                close: toggleClose
            },
            attr = opt ? extend(def, opt) : def;
        $toggle.on('click', function(e) {
            CCIH.Toggle.trigger($(this).data('target'), attr);
            e.preventDefault();
        });
        $doc.on('mouseup', function(e) {
            if (!$toggle.is(e.target) && $toggle.has(e.target).length === 0 && !$contentD.is(e.target) && $contentD.has(e.target).length === 0 && CCIH.Win.width < toggleBreak) {
                CCIH.Toggle.removed($toggle.data('target'), attr);
            }
        });
        $win.on('resize', function() {
            if (CCIH.Win.width < _break.xl || CCIH.Win.width < toggleBreak) {
                CCIH.Toggle.removed($toggle.data('target'), attr);
            }
        });
    }; // Animate FormSearch @v1.0


    CCIH.Ani.formSearch = function(elm, opt) {
        var def = {
                active: 'active',
                timeout: 400,
                target: '[data-search]'
            },
            attr = opt ? extend(def, opt) : def;
        var $elem = $(elm),
            $target = $(attr.target);

        if ($elem.exists()) {
            $elem.on('click', function(e) {
                e.preventDefault();
                var $self = $(this),
                    the_target = $self.data('target'),
                    $self_st = $('[data-search=' + the_target + ']'),
                    $self_tg = $('[data-target=' + the_target + ']');

                if (!$self_st.hasClass(attr.active)) {
                    $self_tg.add($self_st).addClass(attr.active);
                    $self_st.find('input').focus();
                } else {
                    $self_tg.add($self_st).removeClass(attr.active);
                    setTimeout(function() {
                        $self_st.find('input').val('');
                    }, attr.timeout);
                }
            });
            $doc.on({
                keyup: function keyup(e) {
                    if (e.key === "Escape") {
                        $elem.add($target).removeClass(attr.active);
                    }
                },
                mouseup: function mouseup(e) {
                    if (!$target.find('input').val() && !$target.is(e.target) && $target.has(e.target).length === 0 && !$elem.is(e.target) && $elem.has(e.target).length === 0) {
                        $elem.add($target).removeClass(attr.active);
                    }
                }
            });
        }
    }; // Animate FormElement @v1.0


    CCIH.Ani.formElm = function(elm, opt) {
        var def = {
                focus: 'focused'
            },
            attr = opt ? extend(def, opt) : def;

        if ($(elm).exists()) {
            $(elm).each(function() {
                var $self = $(this);

                if ($self.val()) {
                    $self.parent().addClass(attr.focus);
                }

                $self.on({
                    focus: function focus() {
                        $self.parent().addClass(attr.focus);
                    },
                    blur: function blur() {
                        if (!$self.val()) {
                            $self.parent().removeClass(attr.focus);
                        }
                    }
                });
            });
        }
    }; // Form Validate @v1.0


    CCIH.Validate = function(elm, opt) {
        if ($(elm).exists()) {
            $(elm).each(function() {
                var def = {
                        errorElement: "span"
                    },
                    attr = opt ? extend(def, opt) : def;
                $(this).validate(attr);
            });
        }
    };

    CCIH.Validate.init = function() {
        CCIH.Validate('.form-validate', {
            errorElement: "span",
            errorClass: "invalid",
            errorPlacement: function errorPlacement(error, element) {
                error.appendTo(element.parent());
            }
        });
    }; // Dropzone @v1.1


    CCIH.Dropzone = function(elm, opt) {
        if ($(elm).exists()) {
            $(elm).each(function() {
                var maxFiles = $(elm).data('max-files'),
                    maxFiles = maxFiles ? maxFiles : null;
                var maxFileSize = $(elm).data('max-file-size'),
                    maxFileSize = maxFileSize ? maxFileSize : 256;
                var acceptedFiles = $(elm).data('accepted-files'),
                    acceptedFiles = acceptedFiles ? acceptedFiles : null;
                var def = {
                        autoDiscover: false,
                        maxFiles: maxFiles,
                        maxFilesize: maxFileSize,
                        acceptedFiles: acceptedFiles
                    },
                    attr = opt ? extend(def, opt) : def;
                $(this).addClass('dropzone').dropzone(attr);
            });
        }
    }; // Dropzone Init @v1.0


    CCIH.Dropzone.init = function() {
        CCIH.Dropzone('.upload-zone', {
            url: "/images"
        });
    }; // Wizard @v1.0


    CCIH.Wizard = function() {
        var $wizard = $(".nk-wizard").show();
        $wizard.steps({
            headerTag: ".nk-wizard-head",
            bodyTag: ".nk-wizard-content",
            labels: {
                finish: "Submit",
                next: "Next",
                previous: "Prev",
                loading: "Loading ..."
            },
            onStepChanging: function onStepChanging(event, currentIndex, newIndex) {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                } // Needed in some cases if the user went back (clean up)


                if (currentIndex < newIndex) {
                    // To remove error styles
                    $wizard.find(".body:eq(" + newIndex + ") label.error").remove();
                    $wizard.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }

                $wizard.validate().settings.ignore = ":disabled,:hidden";
                return $wizard.valid();
            },
            onFinishing: function onFinishing(event, currentIndex) {
                $wizard.validate().settings.ignore = ":disabled";
                return $wizard.valid();
            },
            onFinished: function onFinished(event, currentIndex) {
                window.location.href = "#";
            }
        }).validate({
            errorElement: "span",
            errorClass: "invalid",
            errorPlacement: function errorPlacement(error, element) {
                error.appendTo(element.parent());
            }
        });
    }; // DataTable @1.1


    CCIH.DataTable = function(elm, opt) {
        if ($(elm).exists()) {
            $(elm).each(function() {
                var auto_responsive = $(this).data('auto-responsive');
                var dom_normal = '<"row justify-between g-2"<"col-7 col-sm-6 text-left"f><"col-5 col-sm-6 text-right"<"datatable-filter"l>>><"datatable-wrap my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-left text-md-right"i>>';
                var dom_separate = '<"row justify-between g-2"<"col-7 col-sm-6 text-left"f><"col-5 col-sm-6 text-right"<"datatable-filter"l>>><"my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-left text-md-right"i>>';
                var dom = $(this).hasClass('is-separate') ? dom_separate : dom_normal;
                var def = {
                        responsive: true,
                        autoWidth: false,
                        dom: dom,
                        language: {
                            search: "",
                            searchPlaceholder: "Type in to Search",
                            lengthMenu: "<span class='d-none d-sm-inline-block'>Show</span><div class='form-control-select'> _MENU_ </div>",
                            info: "_START_ -_END_ of _TOTAL_",
                            infoEmpty: "No records found",
                            infoFiltered: "( Total _MAX_  )",
                            paginate: {
                                "first": "First",
                                "last": "Last",
                                "next": "Next",
                                "previous": "Prev"
                            }
                        }
                    },
                    attr = opt ? extend(def, opt) : def;
                attr = auto_responsive === false ? extend(attr, {
                    responsive: false
                }) : attr;
                $(this).DataTable(attr);
            });
        }
    }; // DataTable Init @v1.0


    CCIH.DataTable.init = function() {
        CCIH.DataTable('.datatable-init', {
            responsive: {
                details: true
            }
        });
        $.fn.DataTable.ext.pager.numbers_length = 7;
    }; // BootStrap Extended


    CCIH.BS.ddfix = function(elm, exc) {
        var dd = elm ? elm : '.dropdown-menu',
            ex = exc ? exc : 'a:not(.clickable), button:not(.clickable), a:not(.clickable) *, button:not(.clickable) *';
        $(dd).on('click', function(e) {
            if (!$(e.target).is(ex)) {
                e.stopPropagation();
                return;
            }
        });

        if (CCIH.State.isRTL) {
            var $dMenu = $('.dropdown-menu');
            $dMenu.each(function() {
                var $self = $(this);

                if ($self.hasClass('dropdown-menu-right') && !$self.hasClass('dropdown-menu-center')) {
                    $self.prev('[data-toggle="dropdown"]').dropdown({
                        popperConfig: {
                            placement: 'bottom-start'
                        }
                    });
                } else if (!$self.hasClass('dropdown-menu-right') && !$self.hasClass('dropdown-menu-center')) {
                    $self.prev('[data-toggle="dropdown"]').dropdown({
                        popperConfig: {
                            placement: 'bottom-end'
                        }
                    });
                }
            });
        }
    }; // BootStrap Specific Tab Open


    CCIH.BS.tabfix = function(elm) {
        var tab = elm ? elm : '[data-toggle="modal"]';
        $(tab).on('click', function() {
            var _this = $(this),
                target = _this.data('target'),
                target_href = _this.attr('href'),
                tg_tab = _this.data('tab-target');

            var modal = target ? $body.find(target) : $body.find(target_href);

            if (tg_tab && tg_tab !== '#' && modal) {
                modal.find('[href="' + tg_tab + '"]').tab('show');
            } else if (modal) {
                var tabdef = modal.find('.nk-nav.nav-tabs');
                var link = $(tabdef[0]).find('[data-toggle="tab"]');
                $(link[0]).tab('show');
            }
        });
    }; // Dark Mode Switch @since v2.0


    CCIH.ModeSwitch = function() {
        var toggle = $('.dark-switch');

        if ($body.hasClass('dark-mode')) {
            toggle.addClass('active');
        } else {
            toggle.removeClass('active');
        }

        toggle.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $body.toggleClass('dark-mode');
        });
    }; // Knob @v1.0


    CCIH.Knob = function(elm, opt) {
        if ($(elm).exists() && typeof $.fn.knob === 'function') {
            var def = {
                    min: 0
                },
                attr = opt ? extend(def, opt) : def;
            $(elm).each(function() {
                $(this).knob(attr);
            });
        }
    }; // Knob Init @v1.0


    CCIH.Knob.init = function() {
        var knob = {
            "default": {
                readOnly: true,
                lineCap: "round"
            },
            half: {
                angleOffset: -90,
                angleArc: 180,
                readOnly: true,
                lineCap: "round"
            }
        };
        CCIH.Knob('.knob', knob["default"]);
        CCIH.Knob('.knob-half', knob.half);
    }; // Range @v1.0.1


    CCIH.Range = function(elm, opt) {
        if ($(elm).exists() && typeof noUiSlider !== 'undefined') {
            $(elm).each(function() {
                var $self = $(this),
                    self_id = $self.attr('id');
                var target = document.getElementById(self_id);
                var def = {
                        start: [25],
                        connect: 'lower',
                        direction: CCIH.State.isRTL ? "rtl" : "ltr",
                        range: {
                            'min': 0,
                            'max': 100
                        }
                    },
                    attr = opt ? extend(def, opt) : def;
                noUiSlider.create(target, attr);
            });
        }
    }; // Range Init @v1.0


    CCIH.Range.init = function() {
        CCIH.Range('.form-range-slider');
    };

    CCIH.Select2.init = function() {
        // CCIH.Select2('.select');
        CCIH.Select2('.form-select');
    }; // Slick Slider @v1.0.1


    CCIH.Slick = function(elm, opt) {
        if ($(elm).exists() && typeof $.fn.slick === 'function') {
            $(elm).each(function() {
                var def = {
                        'prevArrow': '<div class="slick-arrow-prev"><a href="javascript:void(0);" class="slick-prev"><em class="icon ni ni-chevron-left"></em></a></div>',
                        'nextArrow': '<div class="slick-arrow-next"><a href="javascript:void(0);" class="slick-next"><em class="icon ni ni-chevron-right"></em></a></div>',
                        rtl: CCIH.State.isRTL
                    },
                    attr = opt ? extend(def, opt) : def;
                $(this).slick(attr);
            });
        }
    }; // Slick Init @v1.0


    CCIH.Slider.init = function() {
        CCIH.Slick('.slider-init');
    }; // Number Spinner 


    CCIH.NumberSpinner = function(elm, opt) {
        var plus = document.querySelectorAll("[data-number='plus']");
        var minus = document.querySelectorAll("[data-number='minus']");
        plus.forEach(function(item, index, arr) {
            var parent = plus[index].parentNode;
            plus[index].addEventListener("click", function() {
                var child = plus[index].parentNode.children;
                child.forEach(function(item, index, arr) {
                    if (child[index].classList.contains("number-spinner")) {
                        var value = !child[index].value == "" ? parseInt(child[index].value) : 0;
                        var step = !child[index].step == "" ? parseInt(child[index].step) : 1;
                        var max = !child[index].max == "" ? parseInt(child[index].max) : Infinity;

                        if (max + 1 > value + step) {
                            child[index].value = value + step;
                        } else {
                            child[index].value = value;
                        }
                    }
                });
            });
        });
        minus.forEach(function(item, index, arr) {
            var parent = minus[index].parentNode;
            minus[index].addEventListener("click", function() {
                var child = minus[index].parentNode.children;
                child.forEach(function(item, index, arr) {
                    if (child[index].classList.contains("number-spinner")) {
                        var value = !child[index].value == "" ? parseInt(child[index].value) : 0;
                        var step = !child[index].step == "" ? parseInt(child[index].step) : 1;
                        var min = !child[index].min == "" ? parseInt(child[index].min) : 0;

                        if (min - 1 < value - step) {
                            child[index].value = value - step;
                        } else {
                            child[index].value = value;
                        }
                    }
                });
            });
        });
    }; // Extra @v1.1


    CCIH.OtherInit = function() {
        CCIH.ClassBody();
        CCIH.PassSwitch();
        CCIH.CurrentLink();
        CCIH.LinkOff('.is-disable');
        CCIH.ClassNavMenu();
        CCIH.SetHW('[data-height]', 'height');
        CCIH.SetHW('[data-width]', 'width');
        CCIH.NumberSpinner();
    }; // Animate Init @v1.0


    CCIH.Ani.init = function() {
        CCIH.Ani.formElm('.form-control-outlined');
        CCIH.Ani.formSearch('.toggle-search');
    }; // BootstrapExtend Init @v1.0


    CCIH.BS.init = function() {
        CCIH.BS.menutip('a.nk-menu-link');
        CCIH.BS.tooltip('.nk-tooltip');
        CCIH.BS.tooltip('.btn-tooltip', {
            placement: 'top'
        });
        CCIH.BS.tooltip('[data-toggle="tooltip"]');
        CCIH.BS.tooltip('.tipinfo,.nk-menu-tooltip', {
            placement: 'right'
        });
        CCIH.BS.popover('[data-toggle="popover"]');
        CCIH.BS.progress('[data-progress]');
        CCIH.BS.fileinput('.custom-file-input');
        CCIH.BS.modalfix();
        CCIH.BS.ddfix();
        CCIH.BS.tabfix();
    }; // Picker Init @v1.0


    CCIH.Picker.init = function() {
        CCIH.Picker.date('.date-picker');
        CCIH.Picker.dob('.date-picker-alt');
        CCIH.Picker.time('.time-picker');
        CCIH.Picker.date('.date-picker-range', {
            todayHighlight: false,
            autoclose: false
        });
    }; // Addons @v1


    CCIH.Addons.Init = function() {
        CCIH.Knob.init();
        CCIH.Range.init();
        CCIH.Select2.init();
        CCIH.Dropzone.init();
        CCIH.Slider.init();
        CCIH.DataTable.init();
    }; // Toggler @v1


    CCIH.TGL.init = function() {
        CCIH.TGL.content('.toggle');
        CCIH.TGL.expand('.toggle-expand');
        CCIH.TGL.expand('.toggle-opt', {
            toggle: false
        });
        CCIH.TGL.showmenu('.nk-nav-toggle');
        CCIH.TGL.ddmenu('.' + _menu + '-toggle', {
            self: _menu + '-toggle',
            child: _menu + '-sub'
        });
    };

    CCIH.BS.modalOnInit = function() {
        $('.modal').on('shown.bs.modal', function() {
            CCIH.Select2.init();
            CCIH.Validate.init();
        });
    }; // Initial by default
    /////////////////////////////


    CCIH.init = function() {
        CCIH.coms.docReady.push(CCIH.OtherInit);
        CCIH.coms.docReady.push(CCIH.Prettify);
        CCIH.coms.docReady.push(CCIH.ColorBG);
        CCIH.coms.docReady.push(CCIH.ColorTXT);
        CCIH.coms.docReady.push(CCIH.Copied);
        CCIH.coms.docReady.push(CCIH.Ani.init);
        CCIH.coms.docReady.push(CCIH.TGL.init);
        CCIH.coms.docReady.push(CCIH.BS.init);
        CCIH.coms.docReady.push(CCIH.Validate.init);
        CCIH.coms.docReady.push(CCIH.Picker.init);
        CCIH.coms.docReady.push(CCIH.Addons.Init);
        CCIH.coms.docReady.push(CCIH.Wizard);
        CCIH.coms.winLoad.push(CCIH.ModeSwitch);
    };

    CCIH.init();
    return CCIH;
}(CCIH, jQuery);