<style>
:root {
    font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol";
    line-height: 1.5;
    font-weight: 400;
    font-synthesis: none;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    --primary: hsl(270, 100%, 50%);
    --white: #fff;
    --black: #000;
    --darker: color-mix(in oklab, var(--primary), var(--black, #000) 15%);
    --lighter: color-mix(in oklab, var(--primary), var(--white, #fff) 20%);
}

*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    background-color: #f0f0f0;
    padding: 20px;
}

.main-wrapper {
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding: 20px;
    margin: auto;
    margin: 20px 20px;

}

.steps-wrapper {
    width: 100%;
}

.steps {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.step {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    border: 4px solid #dedede;
    background-color: #fff;
    color: #878787;
    font-size: 1.5rem;
    font-weight: bold;
    transition: 0.2s ease;
    padding: 21px;
    margin: 5px;
}

.step.active {
    border-color: var(--primary);
    color: var(--primary);
}

.progress-bar {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 4px;
    background: #dedede;
    z-index: -1;
    transform: translateY(-50%);
}

.progress {
    height: 100%;
    background-color: var(--primary);
    transition: width 0.3s ease;
}

.buttons {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.btn {
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    background-color: var(--primary);
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.btn:hover {
    background-color: var(--darker);
}

.btn:disabled {
    background-color: var(--lighter);
    cursor: not-allowed;
}

</style>

<main class="main-wrapper">
    <div class="steps-wrapper">
        <div class="steps">
            <span class="step active">1</span>
            <span class="step">2</span>
            <span class="step">3</span>
            <span class="step">4</span>
            <span class="step">5</span>
            <span class="step">6</span>
            <span class="step">7</span>
            <span class="step">8</span>
            <span class="step">9</span>
            <span class="step">10</span>

            <div class="progress-bar">
                <span class="progress"></span>
            </div>
        </div>
        <div class="buttons">
            <button class="btn btn-prev" id="btn-prev" disabled>Previous</button>
            <button class="btn btn-next" id="btn-next">Next</button>
        </div>
    </div>
    
</main>

<script>
    const steps = document.querySelectorAll(".step"),
        progress = document.querySelector(".progress-bar .progress"),
        buttons = document.querySelectorAll(".buttons .btn");

    let currentStep = 1;

    const updateSteps = (e) => {
        currentStep = e.target.id === "btn-next" ? ++currentStep : --currentStep;

        steps.forEach((step, index) => {
            step.classList[`${index < currentStep ? "add" : "remove"}`]("active");
        });

        progress.style.width = `${((currentStep - 1) / (steps.length - 1)) * 100}%`;

        if (currentStep === steps.length) {
            buttons[1].disabled = true;
        } else if (currentStep === 1) {
            buttons[0].disabled = true;
        } else {
            buttons.forEach((btn) => (btn.disabled = false));
        }
    };

    buttons.forEach((button) => {
        button.addEventListener("click", updateSteps);
    });
</script>
