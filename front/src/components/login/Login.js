import React from "react";
import { useForm } from "react-hook-form";
import './Login.scss';

export default function Login() {
    const { register, handleSubmit } = useForm();
    const onSubmit = data => console.log(data);

    return (
        <div className={"Body"}>
        <form onSubmit={handleSubmit(onSubmit)}>
            <h1>Mail:</h1>
            <input {...register("usr_mail")} />
            <h1>Password:</h1>
            <input type="password" {...register("usr_password", { required: true })} />
            <input type="submit" />
        </form>
        </div>
    );
}