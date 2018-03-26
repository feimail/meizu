var uploadUrl = '/uc/webjsp/membericon/upload';
var scropUrl = '/uc/webjsp/membericon/scrop';
$(function () {
    window.bounds=[0,0];
    var form = new Form();
    form.init();
});
var Form = function () {
    this.$uploadForm = $("#uploadForm");
    this.$scropForm = $("#scropForm");
    this.$file = $('#file');
    this.$save = $('#save');
    this.allowext = ".jpg,.bmp,.png,.jpeg";
};

$.extend(Form.prototype, {
	$previews:[],
	$previewsPosi:[],
    init: function () {
        this.dealImg();
        this.initResize(1000);
        this.initFormEvent();
        this.savePreviews();
    },
    savePreviews:function(){
        this.$previews.push($("#preview200").clone(false));
        this.$previews.push($("#preview100").clone(false));
        this.$previews.push($("#preview50").clone(false));
        this.$previewsPosi.push($("#preview200").position().left);
        this.$previewsPosi.push($("#preview100").position().left);
        this.$previewsPosi.push($("#preview50").position().left);    	
    },
    dealImg: function () {
        _this = this;
        if($.browser.msie){
        	var $img = $('#origImg');
        	var img = new Image();
        	img.onload = function(){
        		var innerW = 300, innerH = 300;
        		if(img.width>300 || img.height>300){
        			img.width>300 ? innerW = 300 : innerW = (300 * img.width) / img.height;
        			img.height>300 ? innerH = 300 : innerH = (300 * img.height) / img.width;
        		}else if(img.width<300 && img.height<300){
        			innerH = (img.height*innerW)/img.width;
        		}
        		$img.css({
        			top: (300-innerH)/2,
        			left: (300-innerW)/2,
        			width: innerW
        		});
        		_this.initImgSelect(0,0);
        		$img.attr('src', $img.attr('data-src'));//.removeAttr('data-src');
        	}
        	img.src = $img.attr('data-src');
        }else{
        	var $img = $('#origImg');
            $img.on('load', function () {
            	var innerW = 300, innerH = 300;
                var w = $(this).width(), h = $(this).height();
                if(w>300 || h>300){
        			w>300 ? innerW = 300 : innerW = (300 * w) / h;
        			h>300 ? innerH = 300 : innerH = (300 * h) / w;
        		}else if(w<300 && h<300){
        			innerH = (h*innerW)/w;
        		}
                $(this).css({
                    top: (300 - h) / 2,
                    left: (300 - w) / 2,
                    width: innerW
                });
                _this.initImgSelect(0,0);
            });
            $img.attr('src', $img.attr('data-src'));//.removeAttr('data-src');
        }
       
    },
    initImgSelect: function (top,left) {
    	var _this = this;
    	$('#origImg').Jcrop({
    	  bgOpacity:   .2,
    	  setSelect:[0,0,50,50],
    	  onChange: _this.updatePreview,
    	  onSelect: _this.updatePreview,
    	  aspectRatio: 1
    	},function(){
    	  // Use the API to get the real image size
    	  window.bounds = this.getBounds();
    	  // Store the API in the jcrop_api variable
    	  jcrop_api = this;
    	  // Move the preview into the jcrop container for css positioning
    	  $('#preview200').appendTo(jcrop_api.ui.holder);
    	  $('#preview100').appendTo(jcrop_api.ui.holder);
    	  $('#preview50').appendTo(jcrop_api.ui.holder);
    	  if($(".jcrop-holder").length>1){
    		  $(".jcrop-holder").get(1).remove();
    	  }    	  
    	  $(".jcrop-holder").css({"top":top,"left":left});
    	  $('#preview200').css({"top":20-top,"left":_this.$previewsPosi[0]-left});
    	  $('#preview100').css({"top":20-top,"left":_this.$previewsPosi[1]-left});
    	  $('#preview50').css({"top":20-top,"left":_this.$previewsPosi[2]-left});
    	  jcrop_api.animateTo([ 0,0,50,50 ]);
    	});
    },
    updatePreview: function(c){
    	var _this = this;
    	if (parseInt(c.w) > 0){
          var rx200 = 200/c.w, ry200 = 200/c.h, rx100 = 100/c.w, ry100 = 100/c.h, rx50 = 50/c.w, ry50 = 50/c.h;

          $('#preview200 img').css({
            width: Math.round(rx200 * window.bounds[0]) + 'px',
            height: Math.round(ry200 * window.bounds[1]) + 'px',
            marginLeft: '-' + Math.round(rx200 * c.x) + 'px',
            marginTop: '-' + Math.round(ry200 * c.y) + 'px'
          });
          $('#preview100 img').css({
              width: Math.round(rx100 * window.bounds[0]) + 'px',
              height: Math.round(ry100 * window.bounds[1]) + 'px',
              marginLeft: '-' + Math.round(rx100 * c.x) + 'px',
              marginTop: '-' + Math.round(ry100 * c.y) + 'px'
          });
          $('#preview50 img').css({
              width: Math.round(rx50 * window.bounds[0]) + 'px',
              height: Math.round(ry50 * window.bounds[1]) + 'px',
              marginLeft: '-' + Math.round(rx50 * c.x) + 'px',
              marginTop: '-' + Math.round(ry50 * c.y) + 'px'
          });
          
          var image = new Image();
          image.onload = function () {
        	  var scaleOw = image.width/image.height > 1 ? image.width / 300 : image.height / 300;
        	  
              var tempX = Math.round(scaleOw * c.x);
              if (tempX < 0) {
                  tempX = 0;
              }
              $('#x').val(tempX);

              var tempY = Math.round(scaleOw * c.y);
              if (tempY < 0) {
                  tempY = 0;
              }
              $('#y').val(tempY);

              var tempW = Math.round(scaleOw * c.w);
              if (tempW < 0) {
                  tempW = 0;
              }
              $('#w').val(tempW);

              var tempH = Math.round(scaleOw * c.h);
              if (tempH < 0) {
                  tempH = 0;
              }
              $('#h').val(tempH);
          }  
          image.src = $.trim($("#origImg").attr('data-src'))==""?$("#origImg").attr('data-src'):$("#origImg").attr('src');        
        }
    },
    initResize: function (h) {
        global.resizer.setProperty('minH', h);
        $(document.body).css('min-height', h);
    },
    handleSuccess: function (result) {
    	var _this = this;
    	var img = new Image();
    	img.onload = function(){
    		var top = 0, left = 0;
    		if(img.width/img.height>1){
    			$("#origImg").attr("width",300).attr("height",(300*img.height)/img.width);
    			$("#origImg").css({"width":300,"height":(300*img.height)/img.width})
    			top = (300-(300*img.height)/img.width)/2;
    		}else{
    			$("#origImg").attr("height",300).attr("width",(300*img.width)/img.height);
    			$("#origImg").css({"width":(300*img.width)/img.height,"height":300})
    			left = (300-(300*img.width)/img.height)/2;
    		}   
			if(img.width/img.height===1){ left = top = 0; } 	
    		if('jcrop_api' in window) {
        		jcrop_api.destroy();
        		for(var i=0; i<_this.$previews.length; i++){
        			$(".contain").append(_this.$previews[i]);
        		}
        	}
            $('#origImg').attr("src", result);
            $('#bigImg').attr("src", result);
            $('#middleImg').attr("src", result);
            $('#smallImg').attr("src", result);
            $('#origIconUrl').val(result);
            $(".originalMaxWH").attr("src", result);
            $(".jcrop-holder div img").attr("src", result);
            $('#file').val("");
        	_this.initImgSelect(top,left);
    	}
    	img.src = result;    	
    },
    isValidImgExt: function () {
        var imgExt = this.$file.val().substr(this.$file.val().lastIndexOf(".")).toLowerCase();
        if (this.allowext != 0 && this.allowext.indexOf(imgExt) == -1) {
            nAlert("文件格式不正确", "提示", function () {
                $('#origImg').data('imgAreaSelect').update();
            });
            $('#origImg').data('imgAreaSelect').update();
            return false;
        }
        return true;
    },
    initFormEvent: function () {
        var _this = this;
        $("#chooseImg").click(function () {
            $("#file").click();
        });
        this.$save.click(function () {
            $('#origIconUrl').val($('#origImg').attr('src'));
            _this.$scropForm.ajaxSubmit({
                type: "post",
                url: scropUrl,
                dataType: "json",
                success: function (result) {
                    result = util.getData(result);
                    if (result == null)return;
                    location.href = result;
                },
                error: function (result) {
                    nAlert("网络错误！", "提示", function () {
                        //$('#origImg').data('imgAreaSelect').update();
                    });
                    //$('#origImg').data('imgAreaSelect').update();
                }
            });
        });
        this.$file.on("change", function () {  
            if (!_this.isValidImgExt()) {
                return;
            }
            if (!$('#file').val()) {
                return;
            }
            _this.$uploadForm.ajaxSubmit({
                type: "post",
                url: uploadUrl,
                dataType: "json",
                success: function (result) {
                    result = util.getData(result);
                    if (result == null)return;
                    _this.handleSuccess(result);
                },
                error: function (result) {
                    nAlert("网络错误！", "提示", function () {
                        //$('#origImg').data('imgAreaSelect').update();
                    });
                    //$('#origImg').data('imgAreaSelect').update();
                }
            });
        });
    }
});