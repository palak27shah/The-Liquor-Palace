(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[36],{136:function(e,t,n){"use strict";var c=n(0);n(174),t.a=()=>Object(c.createElement)("span",{className:"wc-block-components-spinner","aria-hidden":"true"})},137:function(e,t,n){"use strict";var c=n(0),s=n(1),o=n(4),a=n.n(o),r=(n(178),n(136));t.a=e=>{let{children:t,className:n,screenReaderLabel:o,showSpinner:i=!1,isLoading:l=!0}=e;return Object(c.createElement)("div",{className:a()(n,{"wc-block-components-loading-mask":l})},l&&i&&Object(c.createElement)(r.a,null),Object(c.createElement)("div",{className:a()({"wc-block-components-loading-mask__children":l}),"aria-hidden":l},t),l&&Object(c.createElement)("span",{className:"screen-reader-text"},o||Object(s.__)("Loading…","woo-gutenberg-products-block")))}},174:function(e,t){},178:function(e,t){},237:function(e,t){},241:function(e,t,n){"use strict";var c=n(10),s=n.n(c),o=n(0),a=n(4),r=n.n(a);n(8),n(242),t.a=e=>{let{children:t,className:n,headingLevel:c,...a}=e;const i=r()("wc-block-components-title",n),l="h"+c;return Object(o.createElement)(l,s()({className:i},a),t)}},242:function(e,t){},248:function(e,t){},250:function(e,t,n){"use strict";n.d(t,"b",(function(){return a})),n.d(t,"a",(function(){return r}));var c=n(28),s=n(185);const o=function(){let e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];const{paymentMethods:t,expressPaymentMethods:n,paymentMethodsInitialized:o,expressPaymentMethodsInitialized:a}=Object(s.b)(),r=Object(c.a)(t),i=Object(c.a)(n);return{paymentMethods:e?i:r,isInitialized:e?a:o}},a=()=>o(!1),r=()=>o(!0)},252:function(e,t,n){"use strict";var c=n(10),s=n.n(c),o=n(0),a=n(4),r=n.n(a);const i=e=>"wc-block-components-payment-method-icon wc-block-components-payment-method-icon--"+e;var l=e=>{let{id:t,src:n=null,alt:c=""}=e;return n?Object(o.createElement)("img",{className:i(t),src:n,alt:c}):null},p=n(49);const u=[{id:"alipay",alt:"Alipay",src:p.l+"payment-methods/alipay.svg"},{id:"amex",alt:"American Express",src:p.l+"payment-methods/amex.svg"},{id:"bancontact",alt:"Bancontact",src:p.l+"payment-methods/bancontact.svg"},{id:"diners",alt:"Diners Club",src:p.l+"payment-methods/diners.svg"},{id:"discover",alt:"Discover",src:p.l+"payment-methods/discover.svg"},{id:"eps",alt:"EPS",src:p.l+"payment-methods/eps.svg"},{id:"giropay",alt:"Giropay",src:p.l+"payment-methods/giropay.svg"},{id:"ideal",alt:"iDeal",src:p.l+"payment-methods/ideal.svg"},{id:"jcb",alt:"JCB",src:p.l+"payment-methods/jcb.svg"},{id:"laser",alt:"Laser",src:p.l+"payment-methods/laser.svg"},{id:"maestro",alt:"Maestro",src:p.l+"payment-methods/maestro.svg"},{id:"mastercard",alt:"Mastercard",src:p.l+"payment-methods/mastercard.svg"},{id:"multibanco",alt:"Multibanco",src:p.l+"payment-methods/multibanco.svg"},{id:"p24",alt:"Przelewy24",src:p.l+"payment-methods/p24.svg"},{id:"sepa",alt:"Sepa",src:p.l+"payment-methods/sepa.svg"},{id:"sofort",alt:"Sofort",src:p.l+"payment-methods/sofort.svg"},{id:"unionpay",alt:"Union Pay",src:p.l+"payment-methods/unionpay.svg"},{id:"visa",alt:"Visa",src:p.l+"payment-methods/visa.svg"},{id:"wechat",alt:"WeChat",src:p.l+"payment-methods/wechat.svg"}];var m=n(62);n(248),t.a=e=>{let{icons:t=[],align:n="center",className:c}=e;const a=(e=>{const t={};return e.forEach(e=>{let n={};"string"==typeof e&&(n={id:e,alt:e,src:null}),"object"==typeof e&&(n={id:e.id||"",alt:e.alt||"",src:e.src||null}),n.id&&Object(m.a)(n.id)&&!t[n.id]&&(t[n.id]=n)}),Object.values(t)})(t);if(0===a.length)return null;const i=r()("wc-block-components-payment-method-icons",{"wc-block-components-payment-method-icons--align-left":"left"===n,"wc-block-components-payment-method-icons--align-right":"right"===n},c);return Object(o.createElement)("div",{className:i},a.map(e=>{const t={...e,...(n=e.id,u.find(e=>e.id===n)||{})};var n;return Object(o.createElement)(l,s()({key:"payment-method-icon-"+e.id},t))}))}},258:function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var c=n(0),s=(n(8),n(177));n(237);const o=e=>{let{errorMessage:t="",propertyName:n="",elementId:o=""}=e;const{getValidationError:a,getValidationErrorId:r}=Object(s.b)();if(!t||"string"!=typeof t){const e=a(n)||{};if(!e.message||e.hidden)return null;t=e.message}return Object(c.createElement)("div",{className:"wc-block-components-validation-error",role:"alert"},Object(c.createElement)("p",{id:r(o)},t))}},261:function(e,t,n){"use strict";n.d(t,"a",(function(){return m}));var c=n(1),s=n(9),o=n(6),a=n(19),r=n(29),i=n(0),l=n(226),p=n(177),u=n(40);const m=()=>{const{cartCoupons:e,cartIsLoading:t}=Object(r.a)(),{addErrorNotice:n}=Object(u.a)(),{addSnackbarNotice:m}=(()=>{const{notices:e,createSnackbarNotice:t,removeSnackbarNotice:n,setIsSuppressed:c}=Object(l.b)(),s=Object(i.useRef)(e);Object(i.useEffect)(()=>{s.current=e},[e]);const o=Object(i.useMemo)(()=>({removeNotices:function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;s.current.forEach(t=>{null!==e&&t.status!==e||n(t.id)})},removeSnackbarNotice:n}),[n]),a=Object(i.useMemo)(()=>({addSnackbarNotice:function(e){let n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};t(e,n)}}),[t]);return{notices:e,...o,...a,setIsSuppressed:c}})(),{setValidationErrors:d}=Object(p.b)();return{appliedCoupons:e,isLoading:t,...Object(s.useSelect)((e,t)=>{let{dispatch:s}=t;const r=e(o.CART_STORE_KEY),i=r.isApplyingCoupon(),l=r.isRemovingCoupon(),{applyCoupon:p,removeCoupon:u,receiveApplyingCoupon:b}=s(o.CART_STORE_KEY);return{applyCoupon:e=>{p(e).then(t=>{!0===t&&m(Object(c.sprintf)(
/* translators: %s coupon code. */
Object(c.__)('Coupon code "%s" has been applied to your cart.',"woo-gutenberg-products-block"),e),{id:"coupon-form"})}).catch(e=>{d({coupon:{message:Object(a.decodeEntities)(e.message),hidden:!1}}),b("")})},removeCoupon:e=>{u(e).then(t=>{!0===t&&m(Object(c.sprintf)(
/* translators: %s coupon code. */
Object(c.__)('Coupon code "%s" has been removed from your cart.',"woo-gutenberg-products-block"),e),{id:"coupon-form"})}).catch(e=>{n(e.message,{id:"coupon-form"}),b("")})},isApplyingCoupon:i,isRemovingCoupon:l}},[n,m])}}},275:function(e,t){},276:function(e,t,n){"use strict";var c=n(17),s=n.n(c),o=n(0),a=n(1),r=n(3),i=(n(8),n(2)),l=n(94);class p extends r.Component{constructor(){super(...arguments),s()(this,"state",{errorMessage:"",hasError:!1})}static getDerivedStateFromError(e){return{errorMessage:e.message,hasError:!0}}render(){const{hasError:e,errorMessage:t}=this.state,{isEditor:n}=this.props;if(e){let e=Object(a.__)("This site is experiencing difficulties with this payment method. Please contact the owner of the site for assistance.","woo-gutenberg-products-block");(n||i.CURRENT_USER_IS_ADMIN)&&(e=t||Object(a.__)("There was an error with this payment method. Please verify it's configured correctly.","woo-gutenberg-products-block"));const c=[{id:"0",content:e,isDismissible:!1,status:"error"}];return Object(o.createElement)(l.StoreNoticesContainer,{notices:c})}return this.props.children}}p.defaultProps={isEditor:!1},t.a=p},299:function(e,t){},300:function(e,t,n){"use strict";var c=n(0),s=n(1),o=n(323),a=n(250),r=n(18),i=n(185),l=n(30),p=n.n(l),u=n(276);t.a=()=>{const{isEditor:e}=Object(r.a)(),{setActivePaymentMethod:t,setExpressPaymentError:n,activePaymentMethod:l,paymentMethodData:m,setPaymentStatus:d}=Object(i.b)(),b=Object(o.a)(),{paymentMethods:h}=Object(a.a)(),g=Object(c.useRef)(l),v=Object(c.useRef)(m),j=Object(c.useCallback)(e=>()=>{g.current=l,v.current=m,d().started(),t(e)},[l,m,t,d]),O=Object(c.useCallback)(()=>{d().pristine(),t(g.current,v.current)},[t,d]),y=Object(c.useCallback)(e=>{d().error(e),n(e),t(g.current,v.current)},[t,d,n]),E=Object(c.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";p()("Express Payment Methods should use the provided onError handler instead.",{alternative:"onError",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),e?y(e):n("")}),[n,y]),f=Object.entries(h),k=f.length>0?f.map(t=>{let[n,s]=t;const o=e?s.edit:s.content;return Object(c.isValidElement)(o)?Object(c.createElement)("li",{key:n,id:"express-payment-method-"+n},Object(c.cloneElement)(o,{...b,onClick:j(n),onClose:O,onError:y,setExpressPaymentError:E})):null}):Object(c.createElement)("li",{key:"noneRegistered"},Object(s.__)("No registered Payment Methods","woo-gutenberg-products-block"));return Object(c.createElement)(u.a,{isEditor:e},Object(c.createElement)("ul",{className:"wc-block-components-express-payment__event-buttons"},k))}},318:function(e,t,n){"use strict";var c=n(0),s=n(14);const o=Object(c.createElement)(s.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(s.Path,{fillRule:"evenodd",d:"M5.5 9.5v-2h13v2h-13zm0 3v4h13v-4h-13zM4 7a1 1 0 011-1h14a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7z",clipRule:"evenodd"}));t.a=o},323:function(e,t,n){"use strict";n.d(t,"a",(function(){return N}));var c=n(1),s=n(39),o=n(0),a=n(4),r=n.n(a),i=n(14),l=Object(o.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(o.createElement)("g",{fill:"none",fillRule:"evenodd"},Object(o.createElement)("path",{d:"M0 0h24v24H0z"}),Object(o.createElement)("path",{fill:"#000",fillRule:"nonzero",d:"M17.3 8v1c1 .2 1.4.9 1.4 1.7h-1c0-.6-.3-1-1-1-.8 0-1.3.4-1.3.9 0 .4.3.6 1.4 1 1 .2 2 .6 2 1.9 0 .9-.6 1.4-1.5 1.5v1H16v-1c-.9-.1-1.6-.7-1.7-1.7h1c0 .6.4 1 1.3 1 1 0 1.2-.5 1.2-.8 0-.4-.2-.8-1.3-1.1-1.3-.3-2.1-.8-2.1-1.8 0-.9.7-1.5 1.6-1.6V8h1.3zM12 10v1H6v-1h6zm2-2v1H6V8h8zM2 4v16h20V4H2zm2 14V6h16v12H4z"}),Object(o.createElement)("path",{stroke:"#000",strokeLinecap:"round",d:"M6 16c2.6 0 3.9-3 1.7-3-2 0-1 3 1.5 3 1 0 1-.8 2.8-.8"}))),p=Object(o.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(o.createElement)(i.Path,{fillRule:"evenodd",d:"M18.646 9H20V8l-1-.5L12 4 5 7.5 4 8v1h14.646zm-3-1.5L12 5.677 8.354 7.5h7.292zm-7.897 9.44v-6.5h-1.5v6.5h1.5zm5-6.5v6.5h-1.5v-6.5h1.5zm5 0v6.5h-1.5v-6.5h1.5zm2.252 8.81c0 .414-.334.75-.748.75H4.752a.75.75 0 010-1.5h14.5a.75.75 0 01.749.75z",clipRule:"evenodd"})),u=Object(o.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(o.createElement)(i.Path,{d:"M3.25 12a8.75 8.75 0 1117.5 0 8.75 8.75 0 01-17.5 0zM12 4.75a7.25 7.25 0 100 14.5 7.25 7.25 0 000-14.5zm-1.338 4.877c-.314.22-.412.452-.412.623 0 .171.098.403.412.623.312.218.783.377 1.338.377.825 0 1.605.233 2.198.648.59.414 1.052 1.057 1.052 1.852 0 .795-.461 1.438-1.052 1.852-.41.286-.907.486-1.448.582v.316a.75.75 0 01-1.5 0v-.316a3.64 3.64 0 01-1.448-.582c-.59-.414-1.052-1.057-1.052-1.852a.75.75 0 011.5 0c0 .171.098.403.412.623.312.218.783.377 1.338.377s1.026-.159 1.338-.377c.314-.22.412-.452.412-.623 0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377-.825 0-1.605-.233-2.198-.648-.59-.414-1.052-1.057-1.052-1.852 0-.795.461-1.438 1.052-1.852a3.64 3.64 0 011.448-.582V7.5a.75.75 0 011.5 0v.316c.54.096 1.039.296 1.448.582.59.414 1.052 1.057 1.052 1.852a.75.75 0 01-1.5 0c0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377s-1.026.159-1.338.377z"})),m=n(318),d=n(103),b=n(62),h=n(64);n(275);const g={bank:p,bill:u,card:m.a,checkPayment:l};var v=e=>{let{icon:t="",text:n=""}=e;const c=!!t,s=Object(o.useCallback)(e=>c&&Object(b.a)(e)&&Object(h.b)(g,e),[c]),a=r()("wc-block-components-payment-method-label",{"wc-block-components-payment-method-label--with-icon":c});return Object(o.createElement)("span",{className:a},s(t)?Object(o.createElement)(d.a,{icon:g[t]}):t,n)},j=n(252),O=n(2),y=n(30),E=n.n(y),f=n(137),k=n(258),w=n(29),S=n(261),_=n(27),P=n(35),x=n(185),C=n(41),R=n(32);const M=(e,t)=>{const n=[],s=(t,n)=>{const c=n+"_tax",s=Object(h.b)(e,n)&&Object(b.a)(e[n])?parseInt(e[n],10):0;return{key:n,label:t,value:s,valueWithTax:s+(Object(h.b)(e,c)&&Object(b.a)(e[c])?parseInt(e[c],10):0)}};return n.push(s(Object(c.__)("Subtotal:","woo-gutenberg-products-block"),"total_items")),n.push(s(Object(c.__)("Fees:","woo-gutenberg-products-block"),"total_fees")),n.push(s(Object(c.__)("Discount:","woo-gutenberg-products-block"),"total_discount")),n.push({key:"total_tax",label:Object(c.__)("Taxes:","woo-gutenberg-products-block"),value:parseInt(e.total_tax,10),valueWithTax:parseInt(e.total_tax,10)}),t&&n.push(s(Object(c.__)("Shipping:","woo-gutenberg-products-block"),"total_shipping")),n},N=()=>{const{isCalculating:e,isComplete:t,isIdle:n,isProcessing:a,onCheckoutBeforeProcessing:r,onCheckoutValidationBeforeProcessing:i,onCheckoutAfterProcessingWithSuccess:l,onCheckoutAfterProcessingWithError:p,onSubmit:u,customerId:m}=Object(P.b)(),{currentStatus:d,activePaymentMethod:b,onPaymentProcessing:h,setExpressPaymentError:g,shouldSavePayment:y}=Object(x.b)(),{shippingErrorStatus:N,shippingErrorTypes:I,shippingRates:z,shippingRatesLoading:T,selectedRates:A,setSelectedRates:V,isSelectingRate:L,onShippingRateSuccess:D,onShippingRateFail:B,onShippingRateSelectSuccess:F,onShippingRateSelectFail:H,needsShipping:W}=Object(C.b)(),{billingData:U,shippingAddress:G,setShippingAddress:Y}=Object(R.b)(),{cartItems:J,cartFees:K,cartTotals:X,extensions:q}=Object(w.a)(),{appliedCoupons:Q}=Object(S.a)(),{noticeContexts:Z,responseTypes:$}=Object(_.c)(),ee=Object(o.useRef)(M(X,W)),te=Object(o.useRef)({label:Object(c.__)("Total","woo-gutenberg-products-block"),value:parseInt(X.total_price,10)});Object(o.useEffect)(()=>{ee.current=M(X,W),te.current={label:Object(c.__)("Total","woo-gutenberg-products-block"),value:parseInt(X.total_price,10)}},[X,W]);const ne=Object(o.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";E()("setExpressPaymentError should only be used by Express Payment Methods (using the provided onError handler).",{alternative:"",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),g(e)}),[g]);return{activePaymentMethod:b,billing:{appliedCoupons:Q,billingData:U,cartTotal:te.current,cartTotalItems:ee.current,currency:Object(s.getCurrencyFromPriceResponse)(X),customerId:m,displayPricesIncludingTax:Object(O.getSetting)("displayCartPricesIncludingTax",!1)},cartData:{cartItems:J,cartFees:K,extensions:q},checkoutStatus:{isCalculating:e,isComplete:t,isIdle:n,isProcessing:a},components:{LoadingMask:f.a,PaymentMethodIcons:j.a,PaymentMethodLabel:v,ValidationInputError:k.a},emitResponse:{noticeContexts:Z,responseTypes:$},eventRegistration:{onCheckoutAfterProcessingWithError:p,onCheckoutAfterProcessingWithSuccess:l,onCheckoutBeforeProcessing:r,onCheckoutValidationBeforeProcessing:i,onPaymentProcessing:h,onShippingRateFail:B,onShippingRateSelectFail:H,onShippingRateSelectSuccess:F,onShippingRateSuccess:D},onSubmit:u,paymentStatus:d,setExpressPaymentError:ne,shippingData:{isSelectingRate:L,needsShipping:W,selectedRates:A,setSelectedRates:V,setShippingAddress:Y,shippingAddress:G,shippingRates:z,shippingRatesLoading:T},shippingStatus:{shippingErrorStatus:N,shippingErrorTypes:I},shouldSavePayment:y}}},422:function(e,t,n){"use strict";n.r(t);var c=n(0),s=n(29),o=n(1),a=n(250),r=n(27),i=n(35),l=n(185),p=n(18),u=n(77),m=n(241),d=n(137),b=n(2),h=n(300);n(299);var g=()=>{const{isCalculating:e,isProcessing:t,isAfterProcessing:n,isBeforeProcessing:s,isComplete:g,hasError:v}=Object(i.b)(),{currentStatus:j}=Object(l.b)(),{paymentMethods:O,isInitialized:y}=Object(a.a)(),{isEditor:E}=Object(p.a)(),{noticeContexts:f}=Object(r.c)();if(!y||y&&0===Object.keys(O).length)return E||b.CURRENT_USER_IS_ADMIN?Object(c.createElement)(u.a,{context:f.EXPRESS_PAYMENTS}):null;const k=t||n||s||g&&!v;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(d.a,{isLoading:e||k||j.isDoingExpressPayment},Object(c.createElement)("div",{className:"wc-block-components-express-payment wc-block-components-express-payment--checkout"},Object(c.createElement)("div",{className:"wc-block-components-express-payment__title-container"},Object(c.createElement)(m.a,{className:"wc-block-components-express-payment__title",headingLevel:"2"},Object(o.__)("Express checkout","woo-gutenberg-products-block"))),Object(c.createElement)("div",{className:"wc-block-components-express-payment__content"},Object(c.createElement)(u.a,{context:f.EXPRESS_PAYMENTS},Object(c.createElement)("p",null,Object(o.__)("In a hurry? Use one of our express checkout options:","woo-gutenberg-products-block")),Object(c.createElement)(h.a,null))))),Object(c.createElement)("div",{className:"wc-block-components-express-payment-continue-rule wc-block-components-express-payment-continue-rule--checkout"},Object(o.__)("Or continue below","woo-gutenberg-products-block")))};t.default=e=>{let{className:t}=e;const{cartNeedsPayment:n}=Object(s.a)();return n?Object(c.createElement)("div",{className:t},Object(c.createElement)(g,null)):null}},94:function(e,t,n){}}]);