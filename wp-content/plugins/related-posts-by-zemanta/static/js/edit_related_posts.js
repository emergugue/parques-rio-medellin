(function(d){d.event.props.push("dataTransfer");var t=function(){d("#zem_rp_edit_related_posts").click(function(){var j=window._zem_rp_num_rel_posts,u=window._zem_rp_post_id,m=window._zem_rp_admin_ajax_url,i=window._zem_rp_plugin_static_base_url,w=!!window._zem_rp_erp_search,k=0,b={holder:null,wrapper:null,search_form:null,search_input:null,selected_articles_wrap:null,replace_articles_wrap:null,replace_articles_list:null,article_loader:null,article_list:{},articles_to_insert:null,footer:null,save:null},
h={},l=[],n={},p=[],t=function(a){a.preventDefault();b.holder.remove();d("html").css("overflow","visible")},x=function(a){var c=[];d.each(h,function(){});for(var b=0;b<j;b+=1){var f=h[b];f?"own_sourcefeed"===f.type?c.push({ID:f.aid,post_url:f.url,thumbnail:f.thumbnail,post_title:f.title,post_excerpt:"",post_content:"",post_date:"",picked:!!f.picked,type:f.type,pos:b}):c.push({ID:!1,pos:b,type:f.type}):c.push({ID:!1,pos:b,type:"empty"})}d.post(m,{action:"rp_update_related_posts",post_id:u,related_posts:JSON.stringify(c),
_wpnonce:window._zem_rp_ajax_nonce},a)},z;z=function(a,c,b,f){var c=window._zem_rp_post_tags&&window._zem_rp_post_tags.join(",")||"",g=window._zem_rp_post_title||"",a=a||!1;if(!c&&!g&&!1===a)b(!1);else{var e={},h=1,i=function(){h-=1;if(0>=h){var a=[],c={};d.each(["external","internal"],function(b,f){e[f]&&("ok"===e[f].status&&e[f].data)&&d.each(e[f].data.results,function(b,f){if(c[f.url])return!0;c[f.url]=!0;a.push(f)})});e.external&&"ok"===e.external.status&&(k=e.external.data.settings.num_external_slots);
a?b&&a&&b(a):f&&f()}};d.ajax({url:window._zem_rp_wp_ajax_url,dataType:"json",data:{post_id:u,search:a||"",action:"zem_rp_load_articles",count:30},success:function(a){var c=[];d.each(a,function(a,b){c.push({type:"own_sourcefeed",aid:"in_"+b.id,thumbnail:d(b.img).attr("src"),title:b.title,url:b.url,target_url:b.url})});a={status:"ok",source:"internal",data:{results:c}};e["internal"===a.source?"internal":"external"]=a;i()},error:i})}};var v,A=function(a,c,C){b.replace_articles_list.html("");e.render_selector_shadows();
l=[];b.article_loader.find(".zem-no-articles").hide();b.article_loader.find(".zem-loader").show();b.article_loader.show();var f=k;z(c,C,function(c){c&&c.length?(b.article_loader.hide(),l=d.grep(c,function(a){return 0>window.location.href.indexOf(a.url)}),d.each(l,function(a,c){n[c.aid]?(c=n[c.aid],l[a]=c):n[c.aid]=c}),e.article_selector(),f!==k&&e.articles()):(b.article_loader.find(".zem-no-articles").show(),b.article_loader.find(".zem-loader").hide());e.render_selector_shadows();a&&a(!0)},function(){b.article_loader.find(".zem-no-articles").show();
b.article_loader.find(".zem-loader").hide();e.render_selector_shadows();a&&a(!1)})},q=function(a,c,b){a.picked=!0;a.pos=c;h[c]=a;n[a.aid]=a;e.article_li_selected(a);b&&(x(),e.article_selector())},r=function(a,c){delete h[a.pos];a.picked=!1;a.pos=-1;a.elm&&a.elm.html('<div class="droppable" /><span class="notice">Drag post here</span>').attr("draggable",!1).removeClass("external").data("aid",!1);c&&(x(),e.article_selector())},e={article_li:function(a,c){a.html('<div class="droppable" />');a.data("aid",
c);a.attr("draggable",!0);a.unbind("dragstart").bind("dragstart",function(b){g.drag(b,c,a)});if(c.external)e.article_li_placeholder(a,c);else{var b=d('<img draggable="false" />');b.error(function(){b.unbind("error");var a=parseInt(c.aid.replace("in_"))||parseInt(30*Math.random()),a=i+"thumbs/"+a%30+".jpg";c.thumbnail=a;b.attr("src",a)});c.thumbnail=c.thumbnail||c.thumbnail_url;b.attr("src",c.thumbnail);a.append(b);a.append('<span unselectable="on" class="title">'+c.title+"</span>");var f=d('<a class="open-article" draggable="false" target="_blank" href="'+
c.target_url+'">link out</a>');f.bind("click",function(a){a.stopPropagation()});a.append(f)}},article_li_selector:function(a,c){c.elm=a;e.article_li(a,c);var b=d('<a draggable="false" class="insert overlay" href="#"><div class="txt">insert</div></a>');b.bind("click",function(a){a.preventDefault();for(a=a=0;a<j-1&&h[a];a+=1);h[a]||q(c,a,!0)});a.append(b)},article_li_selected:function(a){var c=b.article_list[a.pos];a.elm=c;e.article_li(c,a);var g=d('<a draggable="false" class="remove overlay" href="#"><span class="icon"></span><span class="txt">remove</span></a>');
g.bind("click",function(c){c.preventDefault();r(a,!0)});c.append(g)},article_selector:function(){b.replace_articles_list.html("");var a={};d.each(h,function(c,b){a[b.aid]=!0});var c=0;d.each(l,function(g,f){if(!a[f.aid]){var h=d("<li />");e.article_li_selector(h,f);b.replace_articles_list.append(h);c+=1}if(30<=c)return!1});e.render_selector_shadows()},render_selector_shadows:function(){var a=b.replace_articles_list.scrollLeft(),c=b.replace_articles_list[0].scrollWidth-b.replace_articles_list.width();
0<a?b.replace_articles_list.addClass("scroll-left"):b.replace_articles_list.removeClass("scroll-left");a<c?b.replace_articles_list.addClass("scroll-right"):b.replace_articles_list.removeClass("scroll-right")},external_placeholders:function(){for(var a=0,c=p.length,a=0;a<k-c;a+=1)p.push(j-k+a);for(a=0;a<k&&a<p.length;a+=1)q({external:!0,type:"external",title:"Cross promotion"},p[a],!1)},articles:function(){e.external_placeholders();d.each(h,function(a,c){c&&(c.aid&&c.picked)&&(a<j?q(c,a,!1):r(c,!1))})},
all:function(){e.articles();e.article_selector()}},g={hint_timeout:null,dragged_article:null,ie9_drag_start:function(a){1!==a.which||(a.ctrlKey||a.metaKey)||d(this).get(0).dragDrop&&d(this).get(0).dragDrop()},drag_hint:function(a){if(!(1!==a.which||a.ctrlKey||a.metaKey)){var a=d(this),c=g.dragged_article||a.data("aid");c&&(g.hint_timeout=setTimeout(function(){c.picked?b.wrapper.find("ul.selected li").addClass("drop-hint"):b.wrapper.find("ul.selected li:not(.external)").addClass("drop-hint");c.picked&&
b.remove_article_sign.show()},100))}},drag:function(a,c,d){a.dataTransfer.setData("text","wprp_article_"+c.aid);a.dataTransfer.setDragImage?a.dataTransfer.setDragImage(d.get(0),d.outerWidth()/2,d.outerHeight()/2):a.dataTransfer.addElement&&a.dataTransfer.addElement(d.get(0));g.dragged_article=c;setTimeout(function(){b.wrapper.find("li .droppable").css("z-index",2)},1);g.drag_hint(a)},drop_remove:function(a){a.preventDefault();var c=g.dragged_article;g.dragged_article&&!c.external&&(r(c,!0),g.dragend(a))},
drop:function(a){d(this).removeClass("drop");a.preventDefault();var c=g.dragged_article;if(!c)return!1;var b=c.pos,f=1*d(this).data("pos");if(b===f)return!1;var e=h[f];if(!e||!(e.external&&!c.picked||e.external&&c.external)){var i=c.picked;i&&r(c,!1);e&&(r(e,!1),i&&q(e,b,!1));q(c,f,!0);g.dragend(a)}},dragover:function(a){a.preventDefault();var a=g.dragged_article,b=d(this).data("aid");(!b||!(b.external&&!a.picked||b.external&&a.external))&&d(this).addClass("drop")},dragleave:function(a){a.preventDefault();
d(this).removeClass("drop")},dragend:function(){clearTimeout(g.hint_timeout);g.dragged_article=null;b.remove_article_sign.hide();b.wrapper.find("li .droppable").css("z-index",-1);b.wrapper.find("ul.selected li").removeClass("drop-hint")},init:function(){b.selected_articles_wrap.delegate("li","dragover",g.dragover).delegate("li","dragleave",g.dragleave).delegate("li","drop",g.drop);b.replace_articles_wrap.bind("dragover",g.dragover).bind("dragleave",g.dragleave).bind("drop",g.drop_remove);b.wrapper.delegate("li[draggable=true]",
"dragstart",g.drag_hint).delegate("li[draggable=true]","dragend",g.dragend).delegate("li[draggable=true]","mousedown",g.drag_hint).delegate("li[draggable=true]","mouseup",g.dragend).delegate("li[draggable=true]","mousemove",g.ie9_drag_start)}};v={update:A,render:e.all,init:function(){g.init();b.search_form.bind("submit",function(a){a.preventDefault();a=b.search_input.val();A(null,a,!0)});b.replace_articles_list.bind("scroll",e.render_selector_shadows)}};b.holder=d('<div id="zem_rp_zem_related_posts_holder"></div>');
b.wrapper=d('<div id="zem_rp_zem_related_posts_wrap"><div class="selected-header"><h4 class="selected-title">Selected posts</h4><a href="#" class="save button">Save and Close</a></div><div class="selected-content"></div></div>');b.holder.append(b.wrapper);b.wrapper.bind("click",function(a){a.stopPropagation()});b.save=b.wrapper.find(".save");b.save.bind("click",function(){x(function(){window.location.reload()});return!1});b.selected_articles_wrap=b.wrapper.find(".selected-content");for(var B=d('<ul class="selected" />'),
s=0;s<j;s+=1){var y=d('<li><div class="droppable" /><span class="notice">Drag post here</span></li>');y.data("pos",s);b.article_list[s]=y;B.append(y)}b.selected_articles_wrap.append(B);b.replace_articles_wrap=d('<div id="zem_rp_replace_article_wrap"><div class="remove-article-sign">Drop article here to remove it</div><div class="recommendations-header"><h4 class="recommendations-title">Recommended posts</h4>'+(w?'<form class="search" action="#"><input placeholder="search" class="search" type="text" /><input class="go button" type="submit" value="go" /></form>':
'<div class="search notice">Please upgrade the plugin to use search.</div>')+'</div><div class="content"><ul></ul></div><div class="footer"><a href="http://www.zemanta.com/?ref=edit-rp" target="_blank" rel="nofollow">zemanta.com</a></div></div>');b.wrapper.append(b.replace_articles_wrap);b.replace_articles_list=b.replace_articles_wrap.find(".content ul");b.article_loader=d('<div class="zem-loader-wrap"><div class="zem-no-articles">No results.</div><div class="zem-loader"><div class="zem-loader-step zem-loader-step-1"></div><div class="zem-loader-step zem-loader-step-2"></div><div class="zem-loader-step zem-loader-step-3"></div></div></div>');
b.replace_articles_wrap.append(b.article_loader);b.remove_article_sign=b.replace_articles_wrap.find(".remove-article-sign");b.search_form=b.replace_articles_wrap.find("form.search");b.search_input=b.replace_articles_wrap.find("input.search");b.footer=b.replace_articles_wrap.find(".footer");b.holder.bind("click",t);d(document).keydown(function(a){27==a.keyCode&&t(a)});d("html").css("overflow","hidden");v.init();(w=d(".zem_rp:first li:not(.zem_rp_special)"))&&w.each(function(a,b){b=d(b);if("own_sourcefeed"==
b.data("post-type")){var e={aid:b.data("poid").split("-")[1],url:b.find("a:first").attr("href"),title:b.find("a.zem_rp_title").text(),text_preview:"",published_datetime:"",thumbnail:b.find("img").attr("src"),picked:!0,type:b.data("post-type"),pos:b.data("position")};l.push(e);n[e.aid]=e;h[a]=e}else({promoted:!0,network:!0,external:!0})[b.data("post-type")]&&p.push(a)});v.update();v.render();d("body").append(b.holder);b.replace_articles_wrap.css("width",Math.min(b.holder.width()-142,Math.max(680,110*
j+130))+"PX");return!1})};(function u(m,i){i||(i=10,m=0);d("#zem_rp_edit_related_posts").length?t():3E4>m?setTimeout(function(){u(m+i,1.5*i)},i):d(function(){t()})})()})(jQuery);
