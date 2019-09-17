/*!
 FixedColumns 3.2.1
 Â©2010-2016 SpryMedia Ltd - datatables.net/license
*/
(function (d) {
  "function" === typeof define && define.amd ? define(["jquery", "datatables.net"], function (q) {
    return d(q, window, document)
  }) : "object" === typeof exports ? module.exports = function (q, r) {
    q || (q = window);
    if (!r || !r.fn.dataTable) r = require("datatables.net")(q, r).$;
    return d(r, q, q.document)
  } : d(jQuery, window, document)
})(function (d, q, r, t) {
  var s = d.fn.dataTable,
  u, m = function (a, b) {
    var c = this;
    if (this instanceof m) {
      if (b === t || !0 === b) b = {};
      var e = d.fn.dataTable.camelToHungarian;
      e && (e(m.defaults, m.defaults, !0), e(m.defaults, b));
      e = (new d.fn.dataTable.Api(a)).settings()[0];
      this.s = {
        dt: e,
        iTableColumns: e.aoColumns.length,
        aiOuterWidths: [],
        aiInnerWidths: []
      };
      this.dom = {
        scroller: null,
        header: null,
        body: null,
        footer: null,
        grid: {
          wrapper: null,
          dt: null,
          left: {
            wrapper: null,
            head: null,
            body: null,
            foot: null
          },
          right: {
            wrapper: null,
            head: null,
            body: null,
            foot: null
          }
        },
        clone: {
          left: {
            header: null,
            body: null,
            footer: null
          },
          right: {
            header: null,
            body: null,
            footer: null
          }
        }
      };
      if (e._oFixedColumns) throw "FixedColumns already initialised on this table";
      e._oFixedColumns = this;
      e._bInitComplete ? this._fnConstruct(b) : e.oApi._fnCallbackReg(e, "aoInitComplete", function () {
        c._fnConstruct(b)
      },
      "FixedColumns")
    } else alert("FixedColumns warning: FixedColumns must be initialised with the 'new' keyword.")
  };
  d.extend(m.prototype, {
    fnUpdate: function () {
      this._fnDraw(!0)
    },
    fnRedrawLayout: function () {
      this._fnColCalc();
      this._fnGridLayout();
      this.fnUpdate()
    },
    fnRecalculateHeight: function (a) {
      delete a._DTTC_iHeight;
      a.style.height = "auto"
    },
    fnSetRowHeight: function (a, b) {
      a.style.height = b + "px"
    },
    fnGetPosition: function (a) {
      var b = this.s.dt.oInstance;
      if (d(a).parents(".DTFC_Cloned").length) {
        if ("tr" === a.nodeName.toLowerCase()) return a = d(a).index(),
        b.fnGetPosition(d("tr", this.s.dt.nTBody)[a]);
        var c = d(a).index(),
        a = d(a.parentNode).index();
        return [b.fnGetPosition(d("tr", this.s.dt.nTBody)[a]), c, b.oApi._fnVisibleToColumnIndex(this.s.dt, c)]
      }
      return b.fnGetPosition(a)
    },
    _fnConstruct: function (a) {
      var b = this;
      if ("function" != typeof this.s.dt.oInstance.fnVersionCheck || !0 !== this.s.dt.oInstance.fnVersionCheck("1.8.0")) alert("FixedColumns " + m.VERSION + " required DataTables 1.8.0 or later. Please upgrade your DataTables installation");
      else if ("" === this.s.dt.oScroll.sX) this.s.dt.oInstance.oApi._fnLog(this.s.dt, 1, "FixedColumns is not needed (no x-scrolling in DataTables enabled), so no action will be taken. Use 'FixedHeader' for column fixing when scrolling is not enabled");
      else {
        this.s = d.extend(!0, this.s, m.defaults, a);
        a = this.s.dt.oClasses;
        this.dom.grid.dt = d(this.s.dt.nTable).parents("div." + a.sScrollWrapper)[0];
        this.dom.scroller = d("div." + a.sScrollBody, this.dom.grid.dt)[0];
        this._fnColCalc();
        this._fnGridSetup();
        var c, e = !1;
        d(this.s.dt.nTableWrapper).on("mousedown.DTFC", function () {
          e = !0;
          d(r).one("mouseup", function () {
            e = !1
          })
        });
        d(this.dom.scroller).on("mouseover.DTFC touchstart.DTFC", function () {
          e || (c = "main")
        }).on("scroll.DTFC", function (a) { ! c && a.originalEvent && (c = "main");
          if ("main" === c && (0 < b.s.iLeftColumns && (b.dom.grid.left.liner.scrollTop = b.dom.scroller.scrollTop), 0 < b.s.iRightColumns)) b.dom.grid.right.liner.scrollTop = b.dom.scroller.scrollTop
        });
        var f = "onwheel" in r.createElement("div") ? "wheel.DTFC" : "mousewheel.DTFC";
        if (0 < b.s.iLeftColumns) d(b.dom.grid.left.liner).on("mouseover.DTFC touchstart.DTFC", function () {
          e || (c = "left")
        }).on("scroll.DTFC", function (a) { ! c && a.originalEvent && (c = "left");
          "left" === c && (b.dom.scroller.scrollTop = b.dom.grid.left.liner.scrollTop, 0 < b.s.iRightColumns && (b.dom.grid.right.liner.scrollTop = b.dom.grid.left.liner.scrollTop))
        }).on(f, function (a) {
          b.dom.scroller.scrollLeft -= "wheel" === a.type ? -a.originalEvent.deltaX : a.originalEvent.wheelDeltaX
        });
        if (0 < b.s.iRightColumns) d(b.dom.grid.right.liner).on("mouseover.DTFC touchstart.DTFC", function () {
          e || (c = "right")
        }).on("scroll.DTFC", function (a) { ! c && a.originalEvent && (c = "right");
          "right" === c && (b.dom.scroller.scrollTop = b.dom.grid.right.liner.scrollTop, 0 < b.s.iLeftColumns && (b.dom.grid.left.liner.scrollTop = b.dom.grid.right.liner.scrollTop))
        }).on(f, function (a) {
          b.dom.scroller.scrollLeft -= "wheel" === a.type ? -a.originalEvent.deltaX : a.originalEvent.wheelDeltaX
        });
        d(q).on("resize.DTFC", function () {
          b._fnGridLayout.call(b)
        });
        var g = !0,
        h = d(this.s.dt.nTable);
        h.on("draw.dt.DTFC", function () {
          b._fnColCalc();
          b._fnDraw.call(b, g);
          g = !1
        }).on("column-sizing.dt.DTFC", function () {
          b._fnColCalc();
          b._fnGridLayout(b)
        }).on("column-visibility.dt.DTFC", function (a, c, d, e, f) {
          if (f === t || f) b._fnColCalc(),
          b._fnGridLayout(b),
          b._fnDraw(!0)
        }).on("select.dt.DTFC deselect.dt.DTFC", function () {
          b._fnDraw(!1)
        }).on("destroy.dt.DTFC", function () {
          h.off(".DTFC");
          d(b.dom.scroller).off(".DTFC");
          d(q).off(".DTFC");
          d(this.s.dt.nTableWrapper).off(".DTFC");
          d(b.dom.grid.left.liner).off(".DTFC " + f);
          d(b.dom.grid.left.wrapper).remove();
          d(b.dom.grid.right.liner).off(".DTFC " + f);
          d(b.dom.grid.right.wrapper).remove()
        });
        this._fnGridLayout();
        this.s.dt.oInstance.fnDraw(!1)
      }
    },
    _fnColCalc: function () {
      var a = this,
      b = 0,
      c = 0;
      this.s.aiInnerWidths = [];
      this.s.aiOuterWidths = [];
      d.each(this.s.dt.aoColumns, function (e, f) {
        var g = d(f.nTh),
        h;
        if (g.filter(":visible").length) {
          var i = g.outerWidth();
          0 === a.s.aiOuterWidths.length && (h = d(a.s.dt.nTable).css("border-left-width"), i += "string" === typeof h ? 1 : parseInt(h, 10));
          a.s.aiOuterWidths.length === a.s.dt.aoColumns.length - 1 && (h = d(a.s.dt.nTable).css("border-right-width"), i += "string" === typeof h ? 1 : parseInt(h, 10));
          a.s.aiOuterWidths.push(i);
          a.s.aiInnerWidths.push(g.width());
          e < a.s.iLeftColumns && (b += i);
          a.s.iTableColumns - a.s.iRightColumns <= e && (c += i)
        } else a.s.aiInnerWidths.push(0),
        a.s.aiOuterWidths.push(0)
      });
      this.s.iLeftWidth = b;
      this.s.iRightWidth = c
    },
    _fnGridSetup: function () {
      var a = this._fnDTOverflow(),
      b;
      this.dom.body = this.s.dt.nTable;
      this.dom.header = this.s.dt.nTHead.parentNode;
      this.dom.header.parentNode.parentNode.style.position = "relative";
      var c = d('<div class="DTFC_ScrollWrapper" style="position:relative; clear:both;"><div class="DTFC_LeftWrapper" style="position:absolute; top:0; left:0;"><div class="DTFC_LeftHeadWrapper" style="position:relative; top:0; left:0; overflow:hidden;"></div><div class="DTFC_LeftBodyWrapper" style="position:relative; top:0; left:0; overflow:hidden;"><div class="DTFC_LeftBodyLiner" style="position:relative; top:0; left:0; overflow-y:scroll;"></div></div><div class="DTFC_LeftFootWrapper" style="position:relative; top:0; left:0; overflow:hidden;"></div></div><div class="DTFC_RightWrapper" style="position:absolute; top:0; right:0;"><div class="DTFC_RightHeadWrapper" style="position:relative; top:0; left:0;"><div class="DTFC_RightHeadBlocker DTFC_Blocker" style="position:absolute; top:0; bottom:0;"></div></div><div class="DTFC_RightBodyWrapper" style="position:relative; top:0; left:0; overflow:hidden;"><div class="DTFC_RightBodyLiner" style="position:relative; top:0; left:0; overflow-y:scroll;"></div></div><div class="DTFC_RightFootWrapper" style="position:relative; top:0; left:0;"><div class="DTFC_RightFootBlocker DTFC_Blocker" style="position:absolute; top:0; bottom:0;"></div></div></div></div>')[0],
      e = c.childNodes[0],
      f = c.childNodes[1];
      this.dom.grid.dt.parentNode.insertBefore(c, this.dom.grid.dt);
      c.appendChild(this.dom.grid.dt);
      this.dom.grid.wrapper = c;
      0 < this.s.iLeftColumns && (this.dom.grid.left.wrapper = e, this.dom.grid.left.head = e.childNodes[0], this.dom.grid.left.body = e.childNodes[1], this.dom.grid.left.liner = d("div.DTFC_LeftBodyLiner", c)[0], c.appendChild(e));
      0 < this.s.iRightColumns && (this.dom.grid.right.wrapper = f, this.dom.grid.right.head = f.childNodes[0], this.dom.grid.right.body = f.childNodes[1], this.dom.grid.right.liner = d("div.DTFC_RightBodyLiner", c)[0], f.style.right = a.bar + "px", b = d("div.DTFC_RightHeadBlocker", c)[0], b.style.width = a.bar + "px", b.style.right = -a.bar + "px", this.dom.grid.right.headBlock = b, b = d("div.DTFC_RightFootBlocker", c)[0], b.style.width = a.bar + "px", b.style.right = -a.bar + "px", this.dom.grid.right.footBlock = b, c.appendChild(f));
      if (this.s.dt.nTFoot && (this.dom.footer = this.s.dt.nTFoot.parentNode, 0 < this.s.iLeftColumns && (this.dom.grid.left.foot = e.childNodes[2]), 0 < this.s.iRightColumns)) this.dom.grid.right.foot = f.childNodes[2];
      "rtl" === d(this.dom.body).css("direction") && (d(e).css({
        left: "",
        right: 0
      }), d(f).css({
        left: a.bar + "px",
        right: ""
      }), d("div.DTFC_RightHeadBlocker", c).css({
        left: -a.bar + "px",
        right: ""
      }))
    },
    _fnGridLayout: function () {
      var a = this,
      b = this.dom.grid;
      d(b.wrapper).width();
      var c = d(this.s.dt.nTable.parentNode).outerHeight(),
      e = d(this.s.dt.nTable.parentNode.parentNode).outerHeight(),
      f = this._fnDTOverflow(),
      g = this.s.iLeftWidth,
      h = this.s.iRightWidth,
      i = function (b, c) {
        f.bar ? a._firefoxScrollError() ? 34 < d(b).height() && (b.style.width = c + f.bar + "px") : b.style.width = c + f.bar + "px" : (b.style.width = c + 20 + "px", b.style.paddingRight = "20px", b.style.boxSizing = "border-box")
      };
      f.x && (c -= f.bar);
      b.wrapper.style.height = e + "px";
      0 < this.s.iLeftColumns && (b.left.wrapper.style.width = g + "px", b.left.wrapper.style.height = "1px", b.left.body.style.height = c + "px", b.left.foot && (b.left.foot.style.top = (f.x ? f.bar : 0) + "px"), i(b.left.liner, g), b.left.liner.style.height = c + "px");
      0 < this.s.iRightColumns && (b.right.wrapper.style.width = h + "px", b.right.wrapper.style.height = "1px", b.right.body.style.height = c + "px", b.right.foot && (b.right.foot.style.top = (f.x ? f.bar : 0) + "px"), i(b.right.liner, h), b.right.liner.style.height = c + "px", b.right.headBlock.style.display = f.y ? "block" : "none", b.right.footBlock.style.display = f.y ? "block" : "none")
    },
    _fnDTOverflow: function () {
      var a = this.s.dt.nTable,
      b = a.parentNode,
      c = {
        x: !1,
        y: !1,
        bar: this.s.dt.oScroll.iBarWidth
      };
      a.offsetWidth > b.clientWidth && (c.x = !0);
      a.offsetHeight > b.clientHeight && (c.y = !0);
      return c
    },
    _fnDraw: function (a) {
      this._fnGridLayout();
      this._fnCloneLeft(a);
      this._fnCloneRight(a);
      null !== this.s.fnDrawCallback && this.s.fnDrawCallback.call(this, this.dom.clone.left, this.dom.clone.right);
      d(this).trigger("draw.dtfc", {
        leftClone: this.dom.clone.left,
        rightClone: this.dom.clone.right
      })
    },
    _fnCloneRight: function (a) {
      if (! (0 >= this.s.iRightColumns)) {
        var b, c = [];
        for (b = this.s.iTableColumns - this.s.iRightColumns; b < this.s.iTableColumns; b++) this.s.dt.aoColumns[b].bVisible && c.push(b);
        this._fnClone(this.dom.clone.right, this.dom.grid.right, c, a)
      }
    },
    _fnCloneLeft: function (a) {
      if (! (0 >= this.s.iLeftColumns)) {
        var b, c = [];
        for (b = 0; b < this.s.iLeftColumns; b++) this.s.dt.aoColumns[b].bVisible && c.push(b);
        this._fnClone(this.dom.clone.left, this.dom.grid.left, c, a)
      }
    },
    _fnCopyLayout: function (a, b, c) {
      for (var e = [], f = [], g = [], h = 0, i = a.length; h < i; h++) {
        var k = [];
        k.nTr = d(a[h].nTr).clone(c, !1)[0];
        for (var l = 0, o = this.s.iTableColumns; l < o; l++) if (-1 !== d.inArray(l, b)) {
          var p = d.inArray(a[h][l].cell, g); - 1 === p ? (p = d(a[h][l].cell).clone(c, !1)[0], f.push(p), g.push(a[h][l].cell), k.push({
            cell: p,
            unique: a[h][l].unique
          })) : k.push({
            cell: f[p],
            unique: a[h][l].unique
          })
        }
        e.push(k)
      }
      return e
    },
    _fnClone: function (a, b, c, e) {
      var f = this,
      g, h, i, k, l, o, p, n, m, j = this.s.dt;
      if (e) {
        d(a.header).remove();
        a.header = d(this.dom.header).clone(!0, !1)[0];
        a.header.className += " DTFC_Cloned";
        a.header.style.width = "100%";
        b.head.appendChild(a.header);
        n = this._fnCopyLayout(j.aoHeader, c, !0);
        k = d(">thead", a.header);
        k.empty();
        g = 0;
        for (h = n.length; g < h; g++) k[0].appendChild(n[g].nTr);
        j.oApi._fnDrawHead(j, n, !0)
      } else {
        n = this._fnCopyLayout(j.aoHeader, c, !1);
        m = [];
        j.oApi._fnDetectHeader(m, d(">thead", a.header)[0]);
        g = 0;
        for (h = n.length; g < h; g++) {
          i = 0;
          for (k = n[g].length; i < k; i++) m[g][i].cell.className = n[g][i].cell.className,
          d("span.DataTables_sort_icon", m[g][i].cell).each(function () {
            this.className = d("span.DataTables_sort_icon", n[g][i].cell)[0].className
          })
        }
      }
      this._fnEqualiseHeights("thead", this.dom.header, a.header);
      "auto" == this.s.sHeightMatch && d(">tbody>tr", f.dom.body).css("height", "auto");
      null !== a.body && (d(a.body).remove(), a.body = null);
      a.body = d(this.dom.body).clone(!0)[0];
      a.body.className += " DTFC_Cloned";
      a.body.style.paddingBottom = j.oScroll.iBarWidth + "px";
      a.body.style.marginBottom = 2 * j.oScroll.iBarWidth + "px";
      null !== a.body.getAttribute("id") && a.body.removeAttribute("id");
      d(">thead>tr", a.body).empty();
      d(">tfoot", a.body).remove();
      var q = d("tbody", a.body)[0];
      d(q).empty();
      if (0 < j.aiDisplay.length) {
        h = d(">thead>tr", a.body)[0];
        for (p = 0; p < c.length; p++) l = c[p],
        o = d(j.aoColumns[l].nTh).clone(!0)[0],
        o.innerHTML = "",
        k = o.style,
        k.paddingTop = "0",
        k.paddingBottom = "0",
        k.borderTopWidth = "0",
        k.borderBottomWidth = "0",
        k.height = 0,
        k.width = f.s.aiInnerWidths[l] + "px",
        h.appendChild(o);
        d(">tbody>tr", f.dom.body).each(function (a) {
          var a = f.s.dt.oFeatures.bServerSide === false ? f.s.dt.aiDisplay[f.s.dt._iDisplayStart + a] : a,
          b = f.s.dt.aoData[a].anCells || d(this).children("td, th"),
          e = this.cloneNode(false);
          e.removeAttribute("id");
          e.setAttribute("data-dt-row", a);
          for (p = 0; p < c.length; p++) {
            l = c[p];
            if (b.length > 0) {
              o = d(b[l]).clone(true, true)[0];
              o.setAttribute("data-dt-row", a);
              o.setAttribute("data-dt-column", p);
              e.appendChild(o)
            }
          }
          q.appendChild(e)
        })
      } else d(">tbody>tr", f.dom.body).each(function () {
        o = this.cloneNode(true);
        o.className = o.className + " DTFC_NoData";
        d("td", o).html("");
        q.appendChild(o)
      });
      a.body.style.width = "100%";
      a.body.style.margin = "0";
      a.body.style.padding = "0";
      j.oScroller !== t && (h = j.oScroller.dom.force, b.forcer ? b.forcer.style.height = h.style.height : (b.forcer = h.cloneNode(!0), b.liner.appendChild(b.forcer)));
      b.liner.appendChild(a.body);
      this._fnEqualiseHeights("tbody", f.dom.body, a.body);
      if (null !== j.nTFoot) {
        if (e) {
          null !== a.footer && a.footer.parentNode.removeChild(a.footer);
          a.footer = d(this.dom.footer).clone(!0, !0)[0];
          a.footer.className += " DTFC_Cloned";
          a.footer.style.width = "100%";
          b.foot.appendChild(a.footer);
          n = this._fnCopyLayout(j.aoFooter, c, !0);
          b = d(">tfoot", a.footer);
          b.empty();
          g = 0;
          for (h = n.length; g < h; g++) b[0].appendChild(n[g].nTr);
          j.oApi._fnDrawHead(j, n, !0)
        } else {
          n = this._fnCopyLayout(j.aoFooter, c, !1);
          b = [];
          j.oApi._fnDetectHeader(b, d(">tfoot", a.footer)[0]);
          g = 0;
          for (h = n.length; g < h; g++) {
            i = 0;
            for (k = n[g].length; i < k; i++) b[g][i].cell.className = n[g][i].cell.className
          }
        }
        this._fnEqualiseHeights("tfoot", this.dom.footer, a.footer)
      }
      b = j.oApi._fnGetUniqueThs(j, d(">thead", a.header)[0]);
      d(b).each(function (a) {
        l = c[a];
        this.style.width = f.s.aiInnerWidths[l] + "px"
      });
      null !== f.s.dt.nTFoot && (b = j.oApi._fnGetUniqueThs(j, d(">tfoot", a.footer)[0]), d(b).each(function (a) {
        l = c[a];
        this.style.width = f.s.aiInnerWidths[l] + "px"
      }))
    },
    _fnGetTrNodes: function (a) {
      for (var b = [], c = 0, d = a.childNodes.length; c < d; c++)"TR" == a.childNodes[c].nodeName.toUpperCase() && b.push(a.childNodes[c]);
      return b
    },
    _fnEqualiseHeights: function (a, b, c) {
      if (! ("none" == this.s.sHeightMatch && "thead" !== a && "tfoot" !== a)) {
        var e, f, g = b.getElementsByTagName(a)[0],
        c = c.getElementsByTagName(a)[0],
        a = d(">" + a + ">tr:eq(0)", b).children(":first");
        a.outerHeight();
        a.height();
        for (var g = this._fnGetTrNodes(g), b = this._fnGetTrNodes(c), h = [], c = 0, a = b.length; c < a; c++) e = g[c].offsetHeight,
        f = b[c].offsetHeight,
        e = f > e ? f : e,
        "semiauto" == this.s.sHeightMatch && (g[c]._DTTC_iHeight = e),
        h.push(e);
        c = 0;
        for (a = b.length; c < a; c++) b[c].style.height = h[c] + "px",
        g[c].style.height = h[c] + "px"
      }
    },
    _firefoxScrollError: function () {
      if (u === t) {
        var a = d("<div/>").css({
          position: "absolute",
          top: 0,
          left: 0,
          height: 10,
          width: 50,
          overflow: "scroll"
        }).appendTo("body");
        u = a[0].clientWidth === a[0].offsetWidth && 0 !== this._fnDTOverflow().bar;
        a.remove()
      }
      return u
    }
  });
  m.defaults = {
    iLeftColumns: 1,
    iRightColumns: 0,
    fnDrawCallback: null,
    sHeightMatch: "semiauto"
  };
  m.version = "3.2.1";
  s.Api.register("fixedColumns()", function () {
    return this
  });
  s.Api.register("fixedColumns().update()", function () {
    return this.iterator("table", function (a) {
      a._oFixedColumns && a._oFixedColumns.fnUpdate()
    })
  });
  s.Api.register("fixedColumns().relayout()", function () {
    return this.iterator("table", function (a) {
      a._oFixedColumns && a._oFixedColumns.fnRedrawLayout()
    })
  });
  s.Api.register("rows().recalcHeight()", function () {
    return this.iterator("row", function (a, b) {
      a._oFixedColumns && a._oFixedColumns.fnRecalculateHeight(this.row(b).node())
    })
  });
  s.Api.register("fixedColumns().rowIndex()", function (a) {
    a = d(a);
    return a.parents(".DTFC_Cloned").length ? this.rows({
      page: "current"
    }).indexes()[a.index()] : this.row(a).index()
  });
  s.Api.register("fixedColumns().cellIndex()", function (a) {
    a = d(a);
    if (a.parents(".DTFC_Cloned").length) {
      var b = a.parent().index(),
      b = this.rows({
        page: "current"
      }).indexes()[b],
      a = a.parents(".DTFC_LeftWrapper").length ? a.index() : this.columns().flatten().length - this.context[0]._oFixedColumns.s.iRightColumns + a.index();
      return {
        row: b,
        column: this.column.index("toData", a),
        columnVisible: a
      }
    }
    return this.cell(a).index()
  });
  d(r).on("init.dt.fixedColumns", function (a, b) {
    if ("dt" === a.namespace) {
      var c = b.oInit.fixedColumns,
      e = s.defaults.fixedColumns;
      if (c || e) e = d.extend({},
      c, e),
      !1 !== c && new m(b, e)
    }
  });
  d.fn.dataTable.FixedColumns = m;
  return d.fn.DataTable.FixedColumns = m
});