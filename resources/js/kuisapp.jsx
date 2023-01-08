import ReactDOM from "react-dom/client";
import { useState, useEffect } from "react";

function KuisApp() {
    const [questions, setQuestions] = useState([
        { id: 0, question: "Loading...", options: ["Loading..."], answer: 0 },
    ]);
    const [current, setCurrent] = useState(0);

    const [selected, setSelected] = useState(-1);
    const [answers, setAnswers] = useState([]);
    const [finished, setFinished] = useState(false);

    var url = window.location.href;
    var tokens = url.split("/");
    var id = tokens[tokens.length - 1];
    //capitalize first letter if more than 4 characters
    if (id.length > 4) {
        id = id.charAt(0).toUpperCase() + id.slice(1);
    } else {
        id = id.toUpperCase();
    }

    useEffect(() => {
        setQuestions([
            {
                id: 1,
                question: "Apakah ini pertanyaan 1?",
                options: ["Ya", "Tidak"],
                answer: 0,
            },
            {
                id: 2,
                question: "Apakah ini  pertanyaan 2?",
                options: ["Ya", "Tidak 2"],
                answer: 1,
            },
        ]);
    }, []);

    function handleAnswer(index) {
        setSelected(index);
        const newAnswers = [...answers];
        newAnswers[current] = index;
        setAnswers(newAnswers);
    }

    function handleNext() {
        if (current < questions.length - 1) {
            setCurrent(current + 1);
        } else {
            setFinished(true);
        }

        setSelected(-1);
    }

    function handlePrev() {
        if (current > 0) {
            setCurrent(current - 1);
            setSelected(answers[current - 1]);
        }
    }

    function calculateScore() {
        let score = 0;
        for (let i = 0; i < questions.length; i++) {
            if (answers[i] === questions[i].answer) {
                score++;
            }
        }
        //return score in percentage
        return (score / questions.length) * 100;
    }

    const finishDiv = (
        <div>
            <h2>Finished</h2>
            <h2>{"Nilai anda : " + calculateScore()}</h2>
            <a href="kuis">
                <button
                    style={{
                        backgroundColor: "orange",
                        color: "white",
                        padding: "5px",
                        borderRadius: "5px",
                        marginBottom: "5px",
                        transitionDuration: "0.3s",
                    }}
                >
                    Kembali ke Kuis
                </button>
            </a>
        </div>
    );

    return (
        <div>
            <div
                style={{
                    width: "500px",
                    backgroundColor: "whitesmoke",
                    // center the div
                    position: "absolute",
                    left: "50%",
                    top: "50%",
                    transform: "translate(-50%, -50%)",
                    padding: "20px",
                    borderRadius: "10px",
                    boxShadow: "0 0 10px 0 rgba(0, 0, 0, 0.2)",
                }}
            >
                <h1>Kuis {id}</h1>
                {finished ? finishDiv : null}
                <div
                    style={{
                        display: finished ? "none" : "block",
                    }}
                >
                    <h3>{"Question " + (current + 1)}</h3>
                    <h2>{questions[current].question}</h2>
                    <div>
                        {questions[current].options.map((option, index) => (
                            <div
                                key={index}
                                style={{
                                    backgroundColor:
                                        selected === index ? "green" : "white",
                                    padding: "5px",
                                    borderRadius: "5px",
                                    marginBottom: "5px",
                                    transitionDuration: "0.3s",
                                    color:
                                        selected === index ? "white" : "black",
                                }}
                                onClick={handleAnswer.bind(this, index)}
                            >
                                <label htmlFor={"option" + index}>
                                    {option}
                                </label>
                            </div>
                        ))}
                        <div
                            style={{
                                width: "100%",
                                display: "flex",
                                justifyContent: "space-between",
                                marginTop: "20px",
                            }}
                        >
                            <button
                                style={{
                                    backgroundColor: "orange",
                                    color: "white",
                                    padding: "5px",
                                    borderRadius: "5px",
                                    marginBottom: "5px",
                                    transitionDuration: "0.3s",
                                }}
                                onClick={handlePrev}
                            >
                                Soal Sebelumnya
                            </button>
                            <button
                                style={{
                                    backgroundColor: "green",
                                    color: "white",
                                    padding: "5px",
                                    borderRadius: "5px",
                                    marginBottom: "5px",
                                    transitionDuration: "0.3s",
                                }}
                                onClick={handleNext}
                            >
                                {current === questions.length - 1
                                    ? "Selesai"
                                    : "Soal Selanjutnya"}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

ReactDOM.createRoot(document.getElementById("kuisapp")).render(
    <div style={{ fontFamily: "Roboto" }}>
        <KuisApp />
    </div>
);
