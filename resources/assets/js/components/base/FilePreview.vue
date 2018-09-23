<template>
    <div class="portrait">
        <div class="zone">
            <div class="file is-boxed">
                <label class="file-label">
                    <input type="file" id="file" ref="file" accept="image/*" v-on:change="handleFileUpload()">
                    <span class="file-cta">
                      <span class="file-icon">
                        <i class="fas fa-upload" v-show="showIcon"></i>
                      </span>
                      <span class="on-image" v-show="showIcon">
                        Click to Change the image
                      </span>
                      <span>
                          <img v-bind:src="imagePreview" />
                      </span>
                      <span class="file-label">
                        Choose a file…
                      </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</template>

<style>
    .portrait {
        width: 40%;
        display: inline-block;
        margin-right:3%;
    }

    @media screen and (max-width: 750px) {
        .portrait {
            width: 100%;
        }
    }

    .file #file {
        display:none;
    }

    .file img {
        width: 100%;
    }

    .on-image {
        position: absolute;
        top: 40%;
        color: #ffffff;
        background: rgba(52,52,52, 0.5);
        padding: 5px;
    }
</style>

<script>
    export default {
        data(){
            return {
                file: '',
                showIcon: true,
                imagePreview: '/images/character_persona.jpg'
            }
        },
        methods: {
            /*
              Handles a change on the file upload
            */

            handleFileUpload(){
                /*
                  Set the local file variable to w hat the user has selected.
                */
                this.file = this.$refs.file.files[0];

                /*
                  Initialize a File Reader object
                */
                let reader  = new FileReader();

                /*
                  Add an event listener to the reader that when the file
                  has been loaded, we flag the show preview as true and set the
                  image to be what was read from the reader.
                */
                reader.addEventListener("load", function () {
                    this.showPreview = true;
                    this.showIcon = false;
                    this.imagePreview = reader.result;
                }.bind(this), false);

                /*
                  Check to see if the file is not empty.
                */
                if( this.file ){
                    /*
                      Ensure the file is an image file.
                    */
                    if ( /\.(jpe?g|png|gif)$/i.test( this.file.name ) ) {
                        /*
                          Fire the readAsDataURL method which will read the file in and
                          upon completion fire a 'load' event which we will listen to and
                          display the image in the preview.
                        */
                        reader.readAsDataURL( this.file );
                    }
                }
            }
        }
    }
</script>
