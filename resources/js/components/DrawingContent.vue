<template>
<div class="drawingContent-color">
    <div class="container text-center">
        <div class="drawingContent-margin" v-if="selectOption">
            <h1 class="d-flex justify-content-center">Drawing</h1>
            <div class="d-flex justify-content-center">
                <label for="">難易度:
                    <select v-model="selectedLevel" name="level" id="" class="form-select">
                        <option value="easy">easy</option>
                        <option value="normal">normal</option>
                        <option value="hard">hard</option>
                    </select>
                </label>
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

            if(this.selectedParts == 'hand' && this.selectedLevel == 'easy'){ //hand: easy
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "hand" && elem.level == "easy";
                });
            } else if (this.selectedParts == 'hand' && this.selectedLevel == 'normal'){ //hand: normal
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "hand" && elem.level == "normal";
                });
            } else if (this.selectedParts == 'hand' && this.selectedLevel == 'hard'){ //hand: hard
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "hand" && elem.level == "hard";
                });
            } else if (this.selectedParts == 'face' && this.selectedLevel == 'easy'){ //face: easy
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "face" && elem.level == "easy";
                });
            } else if (this.selectedParts == 'face' && this.selectedLevel == 'normal'){ //face: normal
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "face" && elem.level == "normal";
                });
            } else if (this.selectedParts == 'face' && this.selectedLevel == 'hard'){ //face: hard
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "face" && elem.level == "hard";
                });
            } else if (this.selectedParts == 'foot' && this.selectedLevel == 'easy'){ //foot: easy
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "foot" && elem.level == "easy";
                });
            } else if (this.selectedParts == 'foot' && this.selectedLevel == 'normal'){ //foot: normal
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "foot" && elem.level == "normal";
                });
            } else if (this.selectedParts == 'foot' && this.selectedLevel == 'hard'){ //foot: hard
                var imagePathObj =  this.imageData.filter(function(elem) {
                    return elem.body_parts == "foot" && elem.level == "hard";
                })
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