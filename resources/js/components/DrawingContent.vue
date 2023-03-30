<template>
<div class="drawingContent-color">
    <div class="container text-center">
        <div class="drawingContent-margin" v-if="selectOption">
            <h1 class="d-flex justify-content-center">Drawing</h1>
            <div class="d-flex justify-content-center">
                <label for="">部位:
                    <select v-model="selectedParts" name="" id="" class="form-select">
                        <option value="hand">手</option>
                        <option value="face">顔</option>
                        <option value="foot">足</option>
                    </select>
                </label>
                <lavel for="">枚数:
                    <select v-model="selectedSheets" name="sheets" id="" class="form-select">
                        <option value="6">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                </lavel>
                <label for="">時間:
                    <select v-model="selectedTime" name="time" id="" class="form-select">
                        <option value="1000">1</option>
                        <option value="5000">5</option>
                        <option value="10000">10</option>
                        <option value="120000">120</option>
                    </select>
                </label>
            </div>
            <button v-on:click="startAction" type="button" class="btn btn-outline-light drawingContent-startButton">START</button>
        </div>
        <div v-if="showImage">
            <div class="d-flex justify-content-center drawingContent-margin">
                <img :src="imageSrc" alt="" >
            </div>
        </div>
        <div v-if="finishContent" class="drawingContent-margin">
            <h1>お疲れ様！！</h1>
            <button @click="redirectToDrawing" class="btn btn-outline-light">もう一度ドローイング</button>
            <button @click="redirectToIndex" class="btn btn-outline-light">トップページへ戻る</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        imageData:{
            type:Object
        },
    },
    name: 'image-data',
    data() {
        return {
            imageSrc: '',
            stopButton: false,
            selectOption: true,
            showImage: false,
            finishContent: false
        }
    },
    methods: {
        startAction: function(){
            this.selectOption = !this.selectOption;

            if(this.selectedParts == 'hand'){ //hand
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "hand";
                });
            } else if(this.selectedParts == 'face'){ //face
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "face";
                });
            } else if(this.selectedParts == 'foot'){ //face
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "foot";
                });
            }
            //パスのみを配列化
            var imagePath = imagePathObj.map((path)=>{
                return path.image_path
            })
            //配列をシャッフル
            function arrayShuffle(array) {
                for(let i = (array.length - 1); 0 < i; i--){
                    let r = Math.floor(Math.random() * (i + 1));
                    let tmp = array[i];
                    array[i] = array[r];
                    array[r] = tmp;
                }
                return array;
            }
            var shuffleImagePath = arrayShuffle(imagePath)
            //画像表示処理
            this.showImage = !this.showImage;
            this.imageSrc += shuffleImagePath[0]
            var i = 1;
            var roops = setInterval(()=>{
                const image = shuffleImagePath[i]
                this.imageSrc = ''
                this.imageSrc += image
                i++

                if(i >= this.selectedSheets){
                    clearInterval(roops)
                    this.showImage = !this.showImage
                    this.finishContent = !this.finishContent
                }
            }, this.selectedTime);
        },
        redirectToIndex() {
            window.location.href = '/';
        },
        redirectToDrawing() {
            window.location.href = '/drawing';
        }
    },
    mounted(){
    },
}
</script>