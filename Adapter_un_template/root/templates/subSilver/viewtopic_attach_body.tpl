
<style type="text/css">
<!--
td.attachrow		{ font: normal 11px Verdana, Arial, Helvetica, sans-serif; color : {T_BODY_TEXT}; border-color : {T_BODY_TEXT}; }
td.attachheader     { font: normal 11px Verdana, Arial, Helvetica, sans-serif; color : {T_BODY_TEXT}; border-color : {T_BODY_TEXT}; background-color: {T_TR_COLOR3}; }
table.attachtable	{ font: normal 12px Verdana, Arial, Helvetica, sans-serif; color : {T_BODY_TEXT}; border-color : {T_BODY_TEXT};	border-collapse : collapse; }
-->
</style>
		
<!-- BEGIN attach -->
	<br /><br />

	<div align="center" style="display: block; clear:both;"><hr width="95%" /></div><div style="display: block; width: 100%;">
          
	<!-- BEGIN denyrow -->
	<table width="95%" border="1" cellpadding="2" cellspacing="0" class="attachtable" align="center">
	<tr>
		<td width="100%" class="attachheader" align="center"><b><span class="gen">{postrow.attach.denyrow.L_DENIED}</span></b></td>
	</tr>
	</table>
	<div align="center"><hr width="95%" /></div>
	<!-- END denyrow -->
	<!-- BEGIN cat_stream -->
	<table width="95%" border="0" cellpadding="2" cellspacing="0" align="center">
	<tr>
		<td width="100%" colspan="2" align="center"><br />
		<object id="wmp" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,0,0,0" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject"> 
		<param name="FileName" value="{postrow.attach.cat_stream.U_DOWNLOAD_LINK}"> 
        <param name="ShowControls" value="1"> 
		<param name="ShowDisplay" value="0"> 
		<param name="ShowStatusBar" value="1"> 
		<param name="AutoSize" value="1"> 
		<param name="AutoStart" value="0"> 
		<param name="Visible" value="1"> 
		<param name="AnimationStart" value="0"> 
		<param name="Loop" value="0"> 
		<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/windows95/downloads/contents/wurecommended/s_wufeatured/mediaplayer/default.asp" src="{postrow.attach.cat_stream.U_DOWNLOAD_LINK}" name=MediaPlayer2 showcontrols=1 showdisplay=0 showstatusbar=1 autosize=1 autostart=0 visible=1 animationatstart=0 loop=0></embed> 
		</object> <br /><br />
		</td>
	</tr>
	<tr>
		<td width="100%" class="attachrow"><b>{L_FILESIZE}:</b></span>&nbsp;{postrow.attach.cat_stream.FILESIZE} {postrow.attach.cat_stream.SIZE_VAR}&nbsp;|&nbsp;<span class="genmed"><b>{postrow.attach.cat_stream.L_DOWNLOADED_VIEWED}:</b>&nbsp;{postrow.attach.cat_stream.L_DOWNLOAD_COUNT}<br /><b>{L_DESCRIPTION}:</b></span>&nbsp;{postrow.attach.cat_stream.COMMENT}&nbsp;</td>
	</tr>
	</table>
	<div align="center"><hr width="95%" /></div>
	<!-- END cat_stream -->
	<!-- BEGIN cat_swf -->
	<table width="95%" border="0" cellpadding="2" cellspacing="0" align="center">
	<tr>
		<td width="100%" colspan="2" align="center"><br />
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="{postrow.attach.cat_swf.WIDTH}" height="{postrow.attach.cat_swf.HEIGHT}"> 
		<param name=movie value="{postrow.attach.cat_swf.U_DOWNLOAD_LINK}"> 
		<param name=loop value=true> 
		<param name=quality value=high> 
		<param name=scale value=noborder> 
		<param name=wmode value=transparent> 
		<param name=bgcolor value=#000000> 
		<embed src="{postrow.attach.cat_swf.U_DOWNLOAD_LINK}" loop=true quality=high scale=noborder wmode=transparent bgcolor=#000000  width="{postrow.attach.cat_swf.WIDTH}" height="{postrow.attach.cat_swf.HEIGHT}" type="application/x-shockwave-flash" pluginspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
		</object><br /><br />
		</td>
	</tr>
	<tr>
		<td width="100%" class="attachrow"><b>{L_FILESIZE}:</b></span>&nbsp;{postrow.attach.cat_swf.FILESIZE} {postrow.attach.cat_swf.SIZE_VAR}&nbsp;|&nbsp;<b>{postrow.attach.cat_swf.L_DOWNLOADED_VIEWED}:</b>&nbsp;{postrow.attach.cat_swf.L_DOWNLOAD_COUNT}<br /><b>{L_DESCRIPTION}:</b></span>&nbsp;{postrow.attach.cat_swf.COMMENT}&nbsp;</td>
	</tr>
	</table>
	<div align="center"><hr width="95%" /></div>
	<!-- END cat_swf -->
	<!-- BEGIN cat_images -->
	<table width="95%" border="0" cellpadding="2" cellspacing="0" align="center">
	<tr>
		<td width="100%" colspan="2"><b><span class="gen">{postrow.attach.cat_images.DOWNLOAD_NAME}</span></b></td>
	</tr>
	<tr>
		<td width="100%" class="attachrow"><span class="genmed"><b>{L_FILESIZE}:</b></span>&nbsp;{postrow.attach.cat_images.FILESIZE} {postrow.attach.cat_images.SIZE_VAR}&nbsp;|&nbsp;<span class="genmed"><b>{postrow.attach.cat_images.L_DOWNLOADED_VIEWED}:</b>&nbsp;{postrow.attach.cat_images.L_DOWNLOAD_COUNT}<br /><b>{L_DESCRIPTION}:</b></span>&nbsp;{postrow.attach.cat_images.COMMENT}</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><br /><img resizemod="on" onload="rmw_img_loaded(this)" src="{postrow.attach.cat_images.IMG_SRC}" alt="{postrow.attach.cat_images.DOWNLOAD_NAME}" border="0" /><br /><br /></td>
	</tr>
	</table>
	<div align="center"><hr width="95%" /></div>
	<!-- END cat_images -->
	<!-- BEGIN cat_thumb_images -->
	<table width="95%" border="0" cellpadding="2" cellspacing="0" align="center">
	<tr>
		<td width="100%" colspan="2"><b><span class="gen">{postrow.attach.cat_thumb_images.DOWNLOAD_NAME}</span></b></td>
	</tr>
	<tr>
		<td width="100%" class="attachrow"><span class="genmed"><b>{L_FILESIZE}:</b></span>&nbsp;{postrow.attach.cat_thumb_images.FILESIZE} {postrow.attach.cat_thumb_images.SIZE_VAR}&nbsp;|&nbsp;<span class="genmed"><b>{postrow.attach.cat_thumb_images.L_DOWNLOADED_VIEWED}:</b>&nbsp;{postrow.attach.cat_thumb_images.L_DOWNLOAD_COUNT}<br /><b>{L_DESCRIPTION}:</b></span>&nbsp;{postrow.attach.cat_thumb_images.COMMENT}</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><br /><a href="{postrow.attach.cat_thumb_images.IMG_SRC}" target="_blank"><img src="{postrow.attach.cat_thumb_images.IMG_THUMB_SRC}" alt="{postrow.attach.cat_thumb_images.DOWNLOAD_NAME}" border="0" /></a><br /><br /></td>
	</tr>
	</table>
	<div align="center"><hr width="95%" /></div>
	<!-- END cat_thumb_images -->
	<!-- BEGIN attachrow -->
	<table width="95%" border="0" cellpadding="2" cellspacing="0" align="center">
	<tr>
		<td width="100%" class="attachrow"><span class="genmed">{postrow.attach.attachrow.S_UPLOAD_IMAGE}&nbsp;<a href="{postrow.attach.attachrow.U_DOWNLOAD_LINK}" {postrow.attach.attachrow.TARGET_BLANK} class="topic-new"><b>{postrow.attach.attachrow.DOWNLOAD_NAME}</b></a>&nbsp;|&nbsp;<b>{L_FILESIZE}:</b></span>&nbsp;{postrow.attach.attachrow.FILESIZE} {postrow.attach.attachrow.SIZE_VAR}&nbsp;|&nbsp;<span class="genmed"><b>{postrow.attach.attachrow.L_DOWNLOADED_VIEWED}:</b>&nbsp;{postrow.attach.attachrow.L_DOWNLOAD_COUNT}<br /><b>{L_DESCRIPTION}:</b></span>&nbsp;{postrow.attach.attachrow.COMMENT}&nbsp;</td>
	</tr>
	</table>
	<!-- END attachrow -->
	</div><div align="center" style="display: block; clear:both;"><hr width="95%" /></div>
	
<!-- END attach -->