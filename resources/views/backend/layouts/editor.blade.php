
<?php
$tiny_key = App\Helpers\Helper::GeneralWebmasterSettings("tiny_key");
if ($tiny_key == "") {
    $tiny_key = "no-key";
}
?>
<script src="https://cdn.tiny.cloud/1/{{ $tiny_key }}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.tinymce',
        height: 550,
        directionality: '{{ App\Helpers\Helper::currentLanguage()->direction }}',
        language: '{{ App\Helpers\Helper::currentLanguage()->code }}',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: false,
        toolbar_mode: 'sliding',
        file_picker_callback(callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
            tinymce.activeEditor.windowManager.openUrl({
                url: '/backend/file-manager/tinymce5',
                title: 'File Manager',
                width: x * 0.65,
                height: y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content, {text: message.text})
                }
            })
        }
    });
</script>
<style>
    .tox-notification--warning{
        display: none !important;
    }
</style>
