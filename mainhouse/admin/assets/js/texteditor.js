
        // TinyMCE Document Management System (DMS) Starter Config
        // Quick start video - https://www.youtube.com/watch?v=_Pp1xnhQqec

        tinymce.init({
            // Select the element(s) to add TinyMCE to using any valid CSS selector
            selector: "#editor",

            // Tip - To keep TinyMCE lean, only include the plugins you need.
            plugins: "advcode advlist advtable anchor autocorrect autolink autosave casechange charmap checklist codesample directionality editimage emoticons export footnotes formatpainter help image insertdatetime link linkchecker lists media mediaembed mergetags nonbreaking pagebreak permanentpen powerpaste searchreplace table tableofcontents tinycomments tinymcespellchecker visualblocks visualchars wordcount",

            // Configure the toolbar so it fits your app. There are many
            // different configuration options available:
            // https://www.tiny.cloud/docs/tinymce/6/toolbar-configuration-options/
            toolbar: "undo redo spellcheckdialog | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image addcomment showcomments | align lineheight checklist bullist numlist | indent outdent | removeformat",

            // Tip - The height option accepts any valid CSS for height
            // If your editor is expected to get larger than the viewport,
            // the sticky toolbar is useful for keeping the controls
            // always visible
            // https://www.tiny.cloud/docs/tinymce/6/editor-size-options/
            // https://www.tiny.cloud/docs/tinymce/6/menus-configuration-options/#toolbar_sticky
            height: '700px',
            toolbar_sticky: true,

            // You can customize the look and feel of the UI using skins and icons.
            // In this demo we are using the premium 'thin' icon pack, which matches popular
            // document editing experiences.
            // https://www.tiny.cloud/docs/tinymce/6/editor-icons/
            //
            // The icons option is disabled by default in this config, but can be enabled
            // by uncommenting the lines below. In order for it to load properly, you must
            // be on a premium plan or trial, and load TinyMCE from the cloud or be
            // running a fully self-hosted deployment.
            //
            // icons: 'thin',

            // The autosave plugin helps prevent data loss if the end-user accidentally
            // closes the browser by storing the content in the browser's local storage
            // There are many configuration options to control things like save interval
            // and retention. The below option loads any unsaved content from local
            // storage into TinyMCE
            // https://www.tiny.cloud/docs/tinymce/6/autosave/#autosave_restore_when_empty
            autosave_restore_when_empty: true,

            // Enable Spell Checker Pro and specify the default and available languages
            // https://www.tiny.cloud/docs/tinymce/6/introduction-to-tiny-spellchecker/
            spellchecker_active: true,
            spellchecker_language: 'en_US',
            spellchecker_languages: 'English (United States)=en_US,English (United Kingdom)=en_GB,Danish=da,French=fr,German=de,Italian=it,Polish=pl,Spanish=es,Swedish=sv',

            // The Tiny Comments plugin enables you to quickly get collaboration up and
            // running. There are a lot of options, but here are the most basic
            // ones to get you started
            // https://www.tiny.cloud/docs/tinymce/6/introduction-to-tiny-comments/
            tinycomments_mode: 'embedded',
            tinycomments_author: 'rmartel',
            tinycomments_author_name: 'Rosalina Martel',
            tinycomments_author_avatar: 'https://www.tiny.cloud/images/avatars/avatar-RosalinaMartel.jpg',

            // Show the comments sidebar by default to encourage collaboration and discovery
            // https://www.tiny.cloud/docs/tinymce/6/customsidebar/#sidebar_show
            sidebar_show: 'showcomments',

            // Merge Tags lets users add non-editable merge tags to your content, so your
            // app can then populate dynamic content into rendered documents
            // https://www.tiny.cloud/docs/tinymce/6/mergetags/
            mergetags_list: [
              {
                value: 'Document.Title',
                title: 'Document Title'
              },
              {
                value: 'Publish.Date',
                title: 'Publish Date'
              },
              {
                value: 'Author.Name',
                title: 'Author Name'
              }
            ],

            // The following CSS will be injected into the editor, extending
            // the default styles.
            // In a real world scenario, it's recommended to use the content_css
            // option to load a separate CSS file. This makes editing easier too.
            // https://www.tiny.cloud/docs/tinymce/6/add-css-options/
            content_style: `
                body {
                    background: #fff;
                }

                @media (min-width: 840px) {
                    html {
                        background: #eceef4;
                        min-height: 100%;
                        padding: 0 .5rem;
                    }

                    body {
                        background-color: #fff;
                        box-shadow: 0 0 4px rgba(0, 0, 0, .15);
                        box-sizing: border-box;
                        margin: 1rem auto 0;
                        max-width: 820px;
                        min-height: calc(100vh - 1rem);
                        padding: 4rem 6rem 6rem 6rem;
                    }
                }
                `,
        });
