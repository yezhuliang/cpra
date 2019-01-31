@extends('layouts.default')
@section('title', '关于')

@section('content')
    <h1>关于页</h1>

<!DOCTYPE html>
<html>
    <head>
        <title>Demo of ACE Editor</title>
        <!--导入js库-->

        <!--

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ext-language_tools.js" type="text/javascript" charset="utf-8"></script>

        -->

        <script src="http://cdn.bootcss.com/ace/1.2.4/ace.js"></script>
        <script src="http://cdn.bootcss.com/ace/1.2.4/ext-language_tools.js"></script>

        <script src="http://cdn.bootcss.com/ace/1.2.4/ext-old_ie.js"></script>
        <script src="http://cdn.bootcss.com/ace/1.2.4/theme-monokai.js"></script>

    </head>

    <body>
        <!--代码输入框（注意请务必设置高度，否则无法显示）-->
        <pre id="code" class="ace_editor" style="min-height:500px"><textarea class="ace_text-input" id="text">
#include <stdio.h>

void main(){

    printf("this is an program.\n");

}</textarea></pre>

        <input type="button" value="运行" id="btn" onclick="runCode(ocode1)">

        <script>

            //初始化对象
            editor = ace.edit("code");

            //设置风格和语言
            theme = "clouds"
            language = "c_cpp"
            editor.setTheme("ace/theme/" + theme);
            editor.session.setMode("ace/mode/" + language);

            //字体大小
            editor.setFontSize(18);

            //设置只读（true时只读，用于展示代码）
            editor.setReadOnly(false);

            //自动换行,设置为off关闭
            editor.setOption("wrap", "free")

            //启用提示菜单
            ace.require("ace/ext/language_tools");
            editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true
                });

            /*

            function runCode(ocode)
            {
                var oText=document.getValue('text');
                var oBten=document.getValue('btn');
                oBten.onclick=function()
                {
                    var new=window.open('about.blank');
                    new.document.write(oText.value);
                }

            }
            */

        </script>
    </body>
</html>

@stop