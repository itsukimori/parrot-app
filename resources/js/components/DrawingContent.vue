<template>
    <div class="container text-center">
        <div class="drawingContent-margin" v-if="selectOption">
            <div class="row">
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">部位: {{ optionBodyparts }}</h5>
                            <p class="card-text">{{ optionBodypartsText }}</p>
                            <select v-model="selectedParts" name="" id="" class="form-select w-100" @change="onOptionBodyparts">
                                <option value="hand">手</option>
                                <option value="face">顔</option>
                                <option value="foot">足</option>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">枚数: {{ optionSheets }}</h5>
                            <p class="card-text">{{ optionSheetsText }}</p>
                            <select v-model="selectedSheets" name="" id="" class="form-select w-100" @change="onOptionSheets">
                                <option value="6">5</option>
                                <option value="11">10</option>
                                <option value="21">20</option>
                                <option value="31">30</option>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">時間: {{ optionTime }}</h5>
                            <p class="card-text">{{ optionTimeText }}</p>
                            <select v-model="selectedTime" name="" id="" class="form-select w-100" @change="onOptionTime">
                                <option value="5000">5</option>
                                <option value="30000">30</option>
                                <option value="60000">60</option>
                                <option value="90000">90</option>
                                <option value="120000">120</option>
                            </select>
                        </div>
                    </div>    
                </div>
            </div>
            <button v-on:click="startAction" type="button" class="btn btn-outline-dark drawingContent-startButton">START</button>
        </div>
        <div v-if="showImage">
            <div class="drawingContent-container">
                <div class="drawingContent-border">
                    <div class="">
                        <img :src="imageSrc" alt="" class="drawingContent-image">
                    </div>
                </div>    
            </div>
        </div>
        <div v-if="countdown" style="margin-top: 100px;">
            <h1>残り：{{ countdownValue }}秒</h1>
        </div>
        <div v-if="finishContent" class="drawingContent-margin">
            <h1>終了しました。</h1>
            <div class="drawingContent-finishButton">
                <button @click="redirectToDrawing" class="btn btn-outline-dark">もう一度ドローイング</button>
                <button @click="redirectToIndex" class="btn btn-outline-dark">トップページへ戻る</button>
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
            countdown: false,
            countdownValue: 0,
            finishContent: false,
            optionBodyparts: '',
            optionBodypartsText: '選択してください',
            optionSheets: '',
            optionSheetsText: '選択してください',
            optionTime: '',
            optionTimeText: '選択してください',
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
            var imageRep = shuffleImagePath.map(item => item.replace("/var/www/html/public", ""));
            console.log(imageRep)
            
            //画像表示処理
            this.showImage = !this.showImage;
            this.countdown = !this.countdown;
            this.imageSrc += imageRep[0]
            var i = 1;
            var roops = setInterval(()=>{
                const image = imageRep[i]
                this.imageSrc = ''
                this.imageSrc += image
                console.log(this.imageSrc)
                i++

                if(i >= this.selectedSheets){
                    clearInterval(roops)
                    this.showImage = !this.showImage
                    this.finishContent = !this.finishContent
                }
            }, this.selectedTime);

            // カウントダウン
            this.countdownValue = this.selectedTime / 1000
            var contdownRoops = setInterval(()=> {
                this.countdownValue--
                if (this.countdownValue == 0) {
                    this.countdownValue = this.selectedTime / 1000
                }

                if(i >= this.selectedSheets){
                    clearInterval(contdownRoops)
                    this.countdownValue = null
                    this.countdown = !this.countdown
                }
            }, 1000);
            
        },
        redirectToIndex() {
            window.location.href = '/';
        },
        redirectToDrawing() {
            window.location.href = '/drawing';
        },
        onOptionBodyparts(event) {
            switch(event.target.value) {
                case 'hand':
                    this.optionBodyparts = '手';
                    this.optionBodypartsText = '手の形は複雑で描くのが難しいですが、継続的な練習で成長できます。'
                    break;
                case 'face':
                    this.optionBodyparts = '顔';
                    this.optionBodypartsText = '顔は表情など、人間の印象を大きく左右する部位であるため、非常に重要です。'
                    break;
                case 'foot':
                    this.optionBodyparts = '足';
                    this.optionBodypartsText = '角度や形状によって描きづらい部位でもありますが、継続的な練習で上達できます。'
                    break;
            }
        },
        onOptionSheets(event) {
            var elem = event.target.value -1;
            this.optionSheets = elem;
            this.optionSheetsText = elem + '枚の画像が指定秒数ごとに切り替わります。'
        },
        onOptionTime(event) {
            var elem = event.target.value / 1000 + '(秒)';
            this.optionTime = elem;
            this.optionTimeText = elem + '秒ごとに画像が切り替わります。'
        }
    },
    mounted(){
    },
}
</script>