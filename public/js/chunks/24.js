(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[24],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/visa/create.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_form_wizard__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-form-wizard */ "./node_modules/vue-form-wizard/dist/vue-form-wizard.js");
/* harmony import */ var vue_form_wizard__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_form_wizard__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vue_form_wizard_dist_vue_form_wizard_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-form-wizard/dist/vue-form-wizard.min.css */ "./node_modules/vue-form-wizard/dist/vue-form-wizard.min.css");
/* harmony import */ var vue_form_wizard_dist_vue_form_wizard_min_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vue_form_wizard_dist_vue_form_wizard_min_css__WEBPACK_IMPORTED_MODULE_1__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  name: "create",
  mounted: function mounted() {// this.getRoles();
  },
  data: function data() {
    return {
      roles: [],
      form: {
        country_name: '',
        price: 0,
        currency: '',
        extraction_time: '',
        visit_time: '',
        expiry: '',
        image: null,
        required_documents: []
      },
      uploadedImage: null,
      is_requesting: false
    };
  },
  components: {
    FormWizard: vue_form_wizard__WEBPACK_IMPORTED_MODULE_0__["FormWizard"],
    TabContent: vue_form_wizard__WEBPACK_IMPORTED_MODULE_0__["TabContent"]
  },
  methods: {
    addRequirement: function addRequirement() {
      this.form.required_documents.push({
        description: ''
      });
    },
    removeRequirement: function removeRequirement(index) {
      if (this.form.required_documents.length > 0) {
        this.form.required_documents.splice(index, 1);
      }
    },
    create: function create() {
      var _this = this;

      this.is_requesting = true;
      var form_data = new FormData();

      for (var key in this.form) {
        if (key === 'image' && this.form.hasOwnProperty(key)) {
          if (this.form[key]) {
            for (var i = 0; i < this.form[key].length; i++) {
              form_data.append(key, this.form[key][i]);
            }
          }
        } else if (key === 'required_documents') {
          form_data.append(key, JSON.stringify(this.form[key]));
        } else {
          form_data.append(key, this.form[key]);
        }
      }

      this.$store.dispatch('visa/create', form_data).then(function (response) {
        _this.$router.push("/dashboard/visa");

        _this.$vs.notify({
          title: 'Success',
          text: response.data.message,
          iconPack: 'feather',
          icon: 'icon-check',
          color: 'success'
        });
      }).catch(function (error) {
        console.log(error);

        _this.$vs.notify({
          title: 'Error',
          text: error.response.data.errors[Object.keys(error.response.data.errors)[0]][0],
          iconPack: 'feather',
          icon: 'icon-alert-circle',
          color: 'danger'
        });
      });
    },
    previewImage: function previewImage(event) {
      var _this2 = this;

      // Reference to the DOM input element
      var input = event.target; // Ensure that you have a file before attempting to read it

      if (input.files && input.files[0]) {
        // create a new FileReader to read this image and convert to base64 format
        var reader = new FileReader(); // Define a callback function to run, when FileReader finishes its job

        reader.onload = function (e) {
          // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
          // Read image as base64 and set to imageData
          _this2.uploadedImage = e.target.result;
          _this2.form.image = input.files;
        }; // Start the reader job - read file as a data url (base64 format)


        reader.readAsDataURL(input.files[0]);
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&":
/*!****************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--7-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css& ***!
  \****************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".image-preview {\n  font-family: \"Helvetica Neue\",Helvetica,Arial,sans-serif;\n  top: 6px;\n  position: relative;\n}[dir=ltr] .image-preview {\n  padding-right: 20px;\n}[dir=rtl] .image-preview {\n  padding-left: 20px;\n}\n#img-upload {\n  display: none;\n}\nimg.preview {\n  width: 55px;\n  height: 55px;\n}\n[dir] img.preview {\n  border-radius: 50%;\n  background-color: white;\n  border: 1px solid #DDD;\n  padding: 5px;\n}\n.vs-input-number {\n  width: -webkit-fit-content;\n  width: -moz-fit-content;\n  width: fit-content;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&":
/*!********************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--7-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css& ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--7-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--7-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm.can("create-visa")
      ? _c(
          "div",
          { staticClass: "vx-col w-full mb-base" },
          [
            _c(
              "vx-card",
              { ref: "create", attrs: { title: "Create Visa" } },
              [
                _c(
                  "form-wizard",
                  {
                    attrs: {
                      color: "rgba(var(--vs-primary), 1)",
                      title: null,
                      subtitle: null,
                      finishButtonText: "Submit"
                    },
                    on: { "on-complete": _vm.create }
                  },
                  [
                    _c(
                      "tab-content",
                      { staticClass: "mb-5", attrs: { title: "Visa Details" } },
                      [
                        _c("div", { staticClass: "vx-row" }, [
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/2 w-full mt-5" },
                            [
                              _c("vs-input", {
                                staticClass: "w-full",
                                attrs: { label: "Country Name" },
                                model: {
                                  value: _vm.form.country_name,
                                  callback: function($$v) {
                                    _vm.$set(_vm.form, "country_name", $$v)
                                  },
                                  expression: "form.country_name"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/4 w-full mt-5" },
                            [
                              _c(
                                "div",
                                { staticClass: "centerx pt-6" },
                                [
                                  _c("vs-input-number", {
                                    attrs: { label: "Price:" },
                                    model: {
                                      value: _vm.form.price,
                                      callback: function($$v) {
                                        _vm.$set(_vm.form, "price", $$v)
                                      },
                                      expression: "form.price"
                                    }
                                  })
                                ],
                                1
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/4 w-full mt-12" },
                            [
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.currency,
                                    expression: "form.currency"
                                  }
                                ],
                                attrs: {
                                  type: "radio",
                                  name: "currency",
                                  value: "LE"
                                },
                                domProps: {
                                  checked: _vm._q(_vm.form.currency, "LE")
                                },
                                on: {
                                  change: function($event) {
                                    return _vm.$set(_vm.form, "currency", "LE")
                                  }
                                }
                              }),
                              _vm._v(" "),
                              _c("label", [_vm._v("LE")]),
                              _vm._v(" "),
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.currency,
                                    expression: "form.currency"
                                  }
                                ],
                                attrs: {
                                  type: "radio",
                                  name: "currency",
                                  value: "$"
                                },
                                domProps: {
                                  checked: _vm._q(_vm.form.currency, "$")
                                },
                                on: {
                                  change: function($event) {
                                    return _vm.$set(_vm.form, "currency", "$")
                                  }
                                }
                              }),
                              _vm._v(" "),
                              _c("label", [_vm._v("$")])
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/2 w-full mt-5" },
                            [
                              _c("vs-input", {
                                staticClass: "w-full",
                                attrs: { label: "Extraction Time" },
                                model: {
                                  value: _vm.form.extraction_time,
                                  callback: function($$v) {
                                    _vm.$set(_vm.form, "extraction_time", $$v)
                                  },
                                  expression: "form.extraction_time"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/2 w-full mt-5" },
                            [
                              _c("vs-input", {
                                staticClass: "w-full",
                                attrs: { label: "Visit Time" },
                                model: {
                                  value: _vm.form.visit_time,
                                  callback: function($$v) {
                                    _vm.$set(_vm.form, "visit_time", $$v)
                                  },
                                  expression: "form.visit_time"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/2 w-full mt-5" },
                            [
                              _c("vs-input", {
                                staticClass: "w-full",
                                attrs: { label: "Expiry" },
                                model: {
                                  value: _vm.form.expiry,
                                  callback: function($$v) {
                                    _vm.$set(_vm.form, "expiry", $$v)
                                  },
                                  expression: "form.expiry"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "vx-col md:w-1/2 w-full mt-5" },
                            [
                              _c("input", {
                                staticClass: "form-control",
                                attrs: { type: "file" },
                                on: { change: _vm.previewImage }
                              })
                            ]
                          )
                        ])
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "tab-content",
                      {
                        staticClass: "mb-5",
                        attrs: { title: "Required Documents" }
                      },
                      [
                        _c(
                          "div",
                          { staticClass: "vx-row" },
                          [
                            _c(
                              "vs-button",
                              {
                                attrs: {
                                  size: "small",
                                  "icon-pack": "feather",
                                  icon: "icon-add"
                                },
                                on: { click: _vm.addRequirement }
                              },
                              [_vm._v("Add Requirement")]
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _vm._l(_vm.form.required_documents, function(
                          requirement,
                          index
                        ) {
                          return _c(
                            "div",
                            { staticClass: "vx-row" },
                            [
                              _c(
                                "div",
                                { staticClass: "vx-col md:w-1/2 w-full" },
                                [
                                  _c(
                                    "div",
                                    { staticClass: "centerx pt-6" },
                                    [
                                      _c("vs-input", {
                                        staticClass: "w-full",
                                        attrs: { label: "Description" },
                                        model: {
                                          value: requirement.description,
                                          callback: function($$v) {
                                            _vm.$set(
                                              requirement,
                                              "description",
                                              $$v
                                            )
                                          },
                                          expression: "requirement.description"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "div",
                                { staticClass: "vx-col w-full" },
                                [
                                  _c(
                                    "vs-button",
                                    {
                                      staticClass: "mt-5",
                                      attrs: {
                                        size: "small",
                                        "icon-pack": "feather",
                                        color: "danger",
                                        icon: "icon-trash"
                                      },
                                      on: {
                                        click: function($event) {
                                          return _vm.removeRequirement(index)
                                        }
                                      }
                                    },
                                    [_vm._v("Remove Row")]
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("vs-divider")
                            ],
                            1
                          )
                        })
                      ],
                      2
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/visa/create.vue":
/*!************************************************!*\
  !*** ./resources/js/src/views/visa/create.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./create.vue?vue&type=template&id=92560320& */ "./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320&");
/* harmony import */ var _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./create.vue?vue&type=script&lang=js& */ "./resources/js/src/views/visa/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./create.vue?vue&type=style&index=0&lang=css& */ "./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__["render"],
  _create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/visa/create.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/visa/create.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/src/views/visa/create.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&":
/*!*********************************************************************************!*\
  !*** ./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css& ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--7-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--7-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320&":
/*!*******************************************************************************!*\
  !*** ./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=template&id=92560320& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/visa/create.vue?vue&type=template&id=92560320&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_92560320___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);