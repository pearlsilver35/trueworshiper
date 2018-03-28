<?php 
 $FusionChart1_dataXML = '<chart showLabels="1" slantLabels="0" yAxisValuesPadding="2" overlapColumns="0" showLimits="1" numDivLines="4" staggerLines="2" yAxisMinValue="" placeValuesInside="0" xAxisName="Total Staffs" yAxisMaxValue="" divLineDashGap="2" yAxisName="functions" labelStep="1" yAxisNamePadding="5" showDivLineValues="1" divLineThickness="1" valuePadding="2" showCanvasBg="1" canvasBgColor="ffff99" showYAxisValues="1" captionPadding="10" chartTopMargin="15" canvasBgAlpha="75" zeroPlaneColor="acbb99" yAxisValuesStep="1" showValues="1" xAxisNamePadding="5" adjustDiv="1" plotFillAlpha="100" rotateValues="0" chartRightMargin="15" rotateLabels="0" showCanvasBase="1" divLineDashLen="4" zeroPlaneAlpha="75" labelPadding="3" chartBottomMargin="15" zeroPlaneBorderColor="acbb99" showShadow="1" chartLeftMargin="15" use3DLighting="1" labelDisplay="WRAP" canvasBgDepth="2" divLineColor="333333" canvasBaseColor="ffffcc" divLineAlpha="100" zeroPlaneShowBorder="1" divLineIsDashed="0" showPlotBorder="0" yAxisNameWidth="20" maxColWidth="100" setAdaptiveYMin="0" rotateYAxisName="1" canvasBaseDepth="2" defaultNumberScale="" baseFontSize="10" baseFont="Verdana" bgAngle="90" bgRatio="0,100" bgAlpha="100,100" bgColor="ffffff,ffffcc" toolTipBgColor="ffffff" toolTipBorderColor="49563a" subCaption="" baseFontColor="0" outCnvBaseFont="Verdana" animation="1" aboutMenuItemLabel="" logoLink="" exportEnabled="0" showExportDataMenuItem="0" seriesNameInTooltip="1" decimalSeparator="." numberScaleValue="1000,1000" toolTipSepChar=", " outCnvBaseFontColor="0" yAxisValueDecimals="2" decimals="2" numberPrefix="" clickURL="" aboutMenuItemLink="" numberScaleUnit="K,M" logoScale="100" formatNumber="1" forceDecimals="0" logoURL="" defaultAnimation="1" formatNumberScale="1" bgSWFAlpha="100" caption="" logoPosition="TL" thousandSeparator="," showToolTip="1" logoAlpha="100" bgSWF="" outCnvBaseFontSize="10" showBorder="0" numberSuffix="" showAboutMenuItem="1" exportHandler="fc_exp_FusionChart1">
  <dynamicData>{FCDW_DATA}</dynamicData>
  <styles>
    <definition>
      <style type="Bevel" name="background_Bevel" distance="2" angle="324" shadowColor="0" shadowAlpha="0" highlightColor="0" highlightAlpha="0" blurX="0" blurY="0" strength="1" quality="3"/>
      <style type="ANIMATION" name="background_0_ANIMATION" param="_alpha" start="0" duration="1" easing="regular"/>
      <style type="ANIMATION" name="datavalues_0_ANIMATION" param="_y" start="0" duration="1" easing="bounce"/>
      <style type="ANIMATION" name="dataplot_0_ANIMATION" param="_xScale" start="1" duration="3" easing="elastic"/>
      <style type="Bevel" name="canvas_Bevel" distance="2" angle="324" shadowColor="0" shadowAlpha="0" highlightColor="0" highlightAlpha="0" blurX="0" blurY="0" strength="1" quality="3"/>
      <style type="ANIMATION" name="canvas_0_ANIMATION" param="_alpha" start="1" duration="1" easing="regular"/>
    </definition>
    <application>
      <apply toObject="background" styles="background_Bevel,background_0_ANIMATION"/>
      <apply toObject="datavalues" styles="datavalues_0_ANIMATION"/>
      <apply toObject="dataplot" styles="dataplot_0_ANIMATION"/>
      <apply toObject="canvas" styles="canvas_Bevel,canvas_0_ANIMATION"/>
    </application>
  </styles>
</chart>';
 ?>