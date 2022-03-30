"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_shop_views_products_ProductListView_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  setup: function setup(__props, _ref) {
    var expose = _ref.expose;
    expose();
    var state = (0,vue__WEBPACK_IMPORTED_MODULE_0__.reactive)({
      products: [],
      removableProductIndex: null,
      search: '',
      check: ''
    });

    function loadProducts() {
      var url = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '/api/v1/products';
      fetch(url).then(function (response) {
        return response.json();
      }).then(function (data) {
        state.products = data.products;
      });
    }

    loadProducts();

    function deleteProducts() {
      state.products = [];
    }

    function removeSpecificProduct() {
      var productId = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      var productIndex = state.products.findIndex(function (p) {
        return p.id == productId;
      });

      if (productIndex >= 0) {
        state.products.splice(productIndex, 1);
      }
    }

    function filterProductsAscending() {
      state.products = state.products.sort(function (a, b) {
        return a.id > b.id ? 1 : -1;
      });
    }

    function filterProductsDescending() {
      state.products = state.products.sort(function (a, b) {
        return a.id > b.id ? -1 : 1;
      });
    }

    function addSearchParameter(name, value) {
      var paramsString = 'api/v1/products?';

      if (value === true) {
        value = 1;
      } else {
        value = '';
      }

      var searchParams = new URLSearchParams();
      searchParams.append(name, value);
      loadProducts(paramsString + decodeURI(searchParams.toString()));
    }

    var __returned__ = {
      state: state,
      loadProducts: loadProducts,
      deleteProducts: deleteProducts,
      removeSpecificProduct: removeSpecificProduct,
      filterProductsAscending: filterProductsAscending,
      filterProductsDescending: filterProductsDescending,
      addSearchParameter: addSearchParameter,
      reactive: vue__WEBPACK_IMPORTED_MODULE_0__.reactive
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3 ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "container"
};
var _hoisted_2 = {
  "class": "row"
};
var _hoisted_3 = {
  "class": "my-3"
};
var _hoisted_4 = {
  "class": "row my-3 mx-3 w-25"
};

var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", null, null, -1
/* HOISTED */
);

var _hoisted_6 = {
  "class": "container"
};
var _hoisted_7 = {
  "class": "row"
};
var _hoisted_8 = {
  "class": "col-3 px-3"
};
var _hoisted_9 = {
  "class": "row"
};
var _hoisted_10 = {
  "class": "mt-3"
};

var _hoisted_11 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "check"
}, "  Sell on-line", -1
/* HOISTED */
);

var _hoisted_12 = {
  "class": "mt-5"
};
var _hoisted_13 = {
  "class": "input-group"
};

var _hoisted_14 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "input-group-text"
}, "Search", -1
/* HOISTED */
);

var _hoisted_15 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "search"
}, null, -1
/* HOISTED */
);

var _hoisted_16 = {
  "class": "my-5"
};
var _hoisted_17 = {
  "class": "col-8 d-flex flex-wrap mt-3 px-3"
};
var _hoisted_18 = {
  "class": "row input-group",
  style: {
    "display": "inline-flex",
    "width": "auto"
  }
};

var _hoisted_19 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
  "class": "card-img-top",
  src: "/img/noimage.png",
  alt: "Some ..."
}, null, -1
/* HOISTED */
);

var _hoisted_20 = {
  "class": "card-body"
};
var _hoisted_21 = {
  "class": "card-title"
};
var _hoisted_22 = {
  "class": "card-text"
};
var _hoisted_23 = {
  "class": "card-text"
};
var _hoisted_24 = {
  "class": "card-text"
};
var _hoisted_25 = ["onClick"];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn btn-success mx-3",
    onClick: _cache[0] || (_cache[0] = function ($event) {
      return $setup.loadProducts();
    })
  }, "LOAD"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn btn-danger",
    onClick: $setup.deleteProducts
  }, "DELETE")]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "my-3"
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn btn-primary mx-3",
    onClick: $setup.filterProductsAscending
  }, "SORT ASCENDING PRODUCTS"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn btn-info",
    onClick: $setup.filterProductsDescending
  }, "SORT DESCENDING PRODUCTS")]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    type: "number",
    "class": "form-control my-3",
    "onUpdate:modelValue": _cache[1] || (_cache[1] = function ($event) {
      return $setup.state.removableProductIndex = $event;
    })
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $setup.state.removableProductIndex]]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn btn-outline-danger",
    type: "button",
    onClick: _cache[2] || (_cache[2] = function ($event) {
      return $setup.removeSpecificProduct($setup.state.removableProductIndex);
    })
  }, "DELETE BY ID ")])]), _hoisted_5]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    type: "checkbox",
    id: "check",
    name: "check",
    "onUpdate:modelValue": _cache[3] || (_cache[3] = function ($event) {
      return $setup.state.check = $event;
    }),
    onChange: _cache[4] || (_cache[4] = function ($event) {
      return $setup.addSearchParameter('check', $setup.state.check);
    })
  }, null, 544
  /* HYDRATE_EVENTS, NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelCheckbox, $setup.state.check]]), _hoisted_11]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_13, [_hoisted_14, _hoisted_15, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    type: "text",
    "class": "form-control",
    placeholder: "Search by model...",
    id: "search",
    name: "search",
    "onUpdate:modelValue": _cache[5] || (_cache[5] = function ($event) {
      return $setup.state.search = $event;
    }),
    onChange: _cache[6] || (_cache[6] = function ($event) {
      return $setup.addSearchParameter('search', $setup.state.search);
    })
  }, null, 544
  /* HYDRATE_EVENTS, NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $setup.state.search]])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
    "class": "btn btn-outline-secondary",
    onClick: _cache[7] || (_cache[7] = function ($event) {
      return $setup.loadProducts();
    })
  }, "Reset")])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_17, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_18, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($setup.state.products, function (product) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "card text-center",
      key: product.id,
      style: {
        "width": "17rem"
      }
    }, [_hoisted_19, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_20, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h5", _hoisted_21, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.name), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_22, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.id), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_23, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.model), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_24, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.price) + " Euro", 1
    /* TEXT */
    )]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
      onClick: function onClick($event) {
        return _ctx.$router.push({
          name: 'products-manage',
          params: {
            id: product.id
          }
        });
      },
      type: "button",
      "class": "w-100 btn btn-lg btn-outline-primary mb-2"
    }, "Change Product", 8
    /* PROPS */
    , _hoisted_25)]);
  }), 128
  /* KEYED_FRAGMENT */
  ))])])])])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./resources/js/shop/views/products/ProductListView.vue":
/*!**************************************************************!*\
  !*** ./resources/js/shop/views/products/ProductListView.vue ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ProductListView_vue_vue_type_template_id_2c1e8cd3__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProductListView.vue?vue&type=template&id=2c1e8cd3 */ "./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3");
/* harmony import */ var _ProductListView_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProductListView.vue?vue&type=script&setup=true&lang=js */ "./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var C_Users_rainl_Desktop_Laravel_code_academy_shooop_src_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_rainl_Desktop_Laravel_code_academy_shooop_src_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_ProductListView_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_ProductListView_vue_vue_type_template_id_2c1e8cd3__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/shop/views/products/ProductListView.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js":
/*!*************************************************************************************************!*\
  !*** ./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js ***!
  \*************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductListView_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductListView_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./ProductListView.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3":
/*!********************************************************************************************!*\
  !*** ./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3 ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductListView_vue_vue_type_template_id_2c1e8cd3__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductListView_vue_vue_type_template_id_2c1e8cd3__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./ProductListView.vue?vue&type=template&id=2c1e8cd3 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/shop/views/products/ProductListView.vue?vue&type=template&id=2c1e8cd3");


/***/ })

}]);