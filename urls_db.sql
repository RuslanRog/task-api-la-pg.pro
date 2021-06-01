--
-- PostgreSQL database dump
--

-- Dumped from database version 11.7
-- Dumped by pg_dump version 11.7

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: urls; Type: TABLE; Schema: public; Owner: ruslan
--

CREATE TABLE public.urls (
    id integer NOT NULL,
    long_url character varying(10000) DEFAULT NULL::character varying,
    long_url_hash character varying(10) DEFAULT NULL::character varying,
    short_url character varying(10) DEFAULT NULL::character varying
);


ALTER TABLE public.urls OWNER TO ruslan;

--
-- Name: urls_id_seq; Type: SEQUENCE; Schema: public; Owner: ruslan
--

ALTER TABLE public.urls ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.urls_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Data for Name: urls; Type: TABLE DATA; Schema: public; Owner: ruslan
--

INSERT INTO public.urls OVERRIDING SYSTEM VALUE VALUES (66, 'https%3A%2F%2Fstackify.com%2F18-websites-every-developer-should-visit-right-now%2F', 'f00b0b7b', '34324');
INSERT INTO public.urls OVERRIDING SYSTEM VALUE VALUES (70, 'https%3A%2F%2Fdeveloper.mozilla.org%2Fen-US%2Fdocs%2FWeb%2FJavaScript%2FReference%2FGlobal_Objects%2FJSON%3FretiredLocale%3Duk', '20815690', '66625');
INSERT INTO public.urls OVERRIDING SYSTEM VALUE VALUES (71, 'https%3A%2F%2Fdeveloper.mozilla.org%2Fen-US%2Fdocs%2FWeb%2FJavaScript%2FReference%2FGlobal_Objects%2FObject', '8d0cf317', '57095');


--
-- Name: urls_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ruslan
--

SELECT pg_catalog.setval('public.urls_id_seq', 71, true);


--
-- Name: urls_long_url_hash_idx; Type: INDEX; Schema: public; Owner: ruslan
--

CREATE INDEX urls_long_url_hash_idx ON public.urls USING btree (long_url_hash);


--
-- PostgreSQL database dump complete
--

