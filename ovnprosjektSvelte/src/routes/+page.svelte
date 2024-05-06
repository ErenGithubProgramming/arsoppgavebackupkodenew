<button on:click={toggle}>Hide</button>

<script>
    import CoolText from "$lib/coolText.svelte";
    import { redirect } from "@sveltejs/kit";

    let show = true

    function toggle() {
        show = !show
    }



    let ovnen = 0
    function increaseTemp() {
        ovnen += 1
    }

    function dreceaseTemp() {
        ovnen -= 1
    }

    let backgroundcolor = "#ff000"/* 
    let backgroundcolorCopy = "#0000FF" */

    $:if (ovnen < 1) {
        backgroundcolor = "#0000FF"
    } else {
        backgroundcolor = "#FF0000"
    }

    if (ovnen = 0) {
        backgroundcolor = "ffffff"
    }
</script>

{#if show}
<main style="background-color:{backgroundcolor}">
    <div >
    
        <div on:click={increaseTemp}>
            <CoolText text="Sett opp!" />
        </div>
    
        <div on:click={dreceaseTemp}>
            <CoolText text="Sett ned!" />
        </div>
    </div>
    
    <button on:click={increaseTemp}>Sett opp temperaturen</button>
    <button on:click={dreceaseTemp}>Sett ned temperaturen</button>
    
    
    <img src="https://www.ikea.com/no/no/images/products/lagan-ovn-hvit__1116867_pe872612_s5.jpg?f=s" style="height: auto; width: 300px; display: block; margin-left: auto; margin-right: auto;" alt="">
    <p style="font-size: x-large; text-align: center;">{ovnen} °</p>

</main>
{/if}
<style>
    main{
        height: 3000px;
        width: auto;
    }
</style>
