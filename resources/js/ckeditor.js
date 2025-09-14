import ClassicEditorBase from '@ckeditor/ckeditor5-build-classic/src/ckeditor';
import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';

export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
    ...ClassicEditorBase.builtinPlugins,
    ImageResize,
    ImageToolbar,
    ImageStyle,
    ImageCaption
];

ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            'heading', '|',
            'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
            'uploadImage', 'blockQuote', 'insertTable', 'undo', 'redo'
        ]
    },
    image: {
        resizeUnit: 'px',
        resizeOptions: [
            {
                name: 'resizeImage:original',
                value: null,
                label: 'Original'
            },
            {
                name: 'resizeImage:200',
                value: '200',
                label: '200px'
            },
            {
                name: 'resizeImage:400',
                value: '400',
                label: '400px'
            },
            {
                name: 'resizeImage:600',
                value: '600',
                label: '600px'
            }
        ],
        toolbar: [
            'imageStyle:inline',
            'imageStyle:block',
            'imageStyle:side',
            '|',
            'resizeImage',
            'toggleImageCaption',
            'linkImage'
        ]
    }
};
